# ── Stage 1: Install PHP dependencies ──
FROM composer:2 AS composer

WORKDIR /app

COPY composer.json composer.lock ./
RUN composer install --no-dev --no-scripts --no-interaction --prefer-dist --ignore-platform-reqs

COPY . .
RUN composer dump-autoload --optimize


# ── Stage 2: Build frontend assets (needs vendor for Ziggy) ──
FROM node:20-alpine AS frontend

WORKDIR /app

ENV NODE_ENV=development

COPY package.json package-lock.json ./
RUN npm ci

COPY . .
COPY --from=composer /app/vendor ./vendor

ENV NODE_ENV=production
RUN npx vite build && npx vite build --ssr


# ── Stage 3: Production image ──
FROM php:8.4-fpm-alpine

RUN apk add --no-cache \
    nginx \
    supervisor \
    nodejs \
    curl \
    libpng-dev \
    libzip-dev \
    icu-dev \
    oniguruma-dev \
    && docker-php-ext-install \
    pdo_mysql \
    mbstring \
    zip \
    intl \
    bcmath \
    gd \
    opcache \
    && rm -rf /var/cache/apk/*

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

COPY docker/php.ini /usr/local/etc/php/conf.d/99-custom.ini
COPY docker/nginx.conf /etc/nginx/http.d/default.conf
COPY docker/supervisord.conf /etc/supervisord.conf

WORKDIR /var/www/html

# Copy app source
COPY . .

# Copy PHP deps from composer stage
COPY --from=composer /app/vendor ./vendor

# Copy built frontend assets
COPY --from=frontend /app/public/build ./public/build
COPY --from=frontend /app/bootstrap/ssr ./bootstrap/ssr

# Entrypoint
COPY docker/entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

# Permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache \
    && mkdir -p /var/log/supervisor /var/run/nginx

EXPOSE 80

CMD ["/entrypoint.sh"]
