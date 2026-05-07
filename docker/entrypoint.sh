#!/bin/sh
set -e

cd /var/www/html

# Laravel requires .env to exist even if empty (Coolify injects env vars)
touch .env

# Ensure storage directories exist
mkdir -p storage/logs storage/framework/{cache,sessions,views}
chown -R www-data:www-data storage bootstrap/cache

# Cache config and routes for production
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run migrations
php artisan migrate --force || true

# Create storage link
php artisan storage:link || true

exec /usr/bin/supervisord -c /etc/supervisord.conf
