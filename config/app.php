<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application, which will be used when the
    | framework needs to place the application's name in a notification or
    | other UI elements where an application name needs to be displayed.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | the application so that it's available within Artisan commands.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. The timezone
    | is set to "UTC" by default as it is suitable for most use cases.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by Laravel's translation / localization methods. This option can be
    | set to any locale for which you plan to have translation strings.
    |
    */

    'locale' => env('APP_LOCALE', 'en'),

    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),

    'faker_locale' => env('APP_FAKER_LOCALE', 'en_US'),

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is utilized by Laravel's encryption services and should be set
    | to a random, 32 character string to ensure that all encrypted values
    | are secure. You should do this prior to deploying the application.
    |
    */

    'cipher' => 'AES-256-CBC',

    'key' => env('APP_KEY'),

    'previous_keys' => [
        ...array_filter(
            explode(',', (string) env('APP_PREVIOUS_KEYS', ''))
        ),
    ],

    /*
    |--------------------------------------------------------------------------
    | Maintenance Mode Driver
    |--------------------------------------------------------------------------
    |
    | These configuration options determine the driver used to determine and
    | manage Laravel's "maintenance mode" status. The "cache" driver will
    | allow maintenance mode to be controlled across multiple machines.
    |
    | Supported drivers: "file", "cache"
    |
    */

    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],

    'admin' => [
        'password' => env('ADMIN_PASSWORD')
    ],

    'plans' => [
        'self' => [
            'options' => [
                'popular' => true,
                'price' => "£20",
                'title' => "Self Managed",
                'strapline' =>
                    "You manage your own content through a simple CMS. We build it, you run it.",
            ],
            'bullets' => [
                "Custom designed website",
                "Domain*, Hosting & Email included",
                "Simple CMS dashboard",
                "Silver Ticket Support",
            ],
        ],
        // fig: {
        //     options: {
        //         popular: true,
        //         price: "£20",
        //         title: "Fig Managed",
        //         strapline:
        //             "We handle all your content updates and design changes for you.",
        //     },
        //     bullets: [
        //         "Everything in Self Managed",
        //         "We update your content for you",
        //         "Unlimited content changes",
        //         "Silver Ticket Support",
        //     ],
        // },
        'developed' => [
            'options' => [
                'popular' => false,
                'price' => "£100",
                'title' => "Fig Developed",
                'strapline' =>
                    "Shopping Carts, ERPs and more.",
            ],
            'bullets' => [
                "Everything in Self Managed",
                "Gold Ticket Support",
                "Guaranteed 3 hours Minimum Development Time",
                "Pro-active Advice and Feedback",
            ],
        ],
        'consultant' => [
            'options' => [
                'popular' => false,
                'price' => "£500",
                'title' => "Fractional Consultantcy",
                'strapline' =>
                    "Ideas brought to life on the web.",
            ],
            'bullets' => [
                "Everything in Fig Developed",
                "Board-Level Strategic Advice",
                "Backed by 25 Years of Experience",
                "Guaranteed 15 hours Minimum Development Time",
            ],
        ],
    ],
];
