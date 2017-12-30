<?php
return [
    /**
     * Layout's to be used on package pages
     */
    'layout' => 'permit::layouts.app',
    /**
     * Middleware that will wrap up seo routes
     */
    'middleware' => 'auth',
    /**
     *
     */
    'linkProviders' => [

    ],
    /**
     * Name of the flash variable that holds success message
     */
    'flash_message' => 'permit_message',

    /**
     * Name of the flash variable that holds error message
     */
    'flash_error' => 'permit_error',

    /**
     * Full path where robot.txt file will be saved.
     */
    'robot_txt' => public_path('robots.txt'),

    /**
     * public folder of your xml sitemap
     */
    'sitemap_location' => 'sitemaps',

    /**
     * Cache setting
     */
    'cache' => [
        /**
         * Do you like to serve seo tags from cache. It is highly recommended on production server.
         */
        'enable' => true,

        /**
         * Path where html files will be saved.
         */
        'storage' => storage_path('app/seo'),

        /**
         * After a this time cache will be update with database.
         *
         * Expire in seconds. Default it would be one day
         */
        'expire' => 1
    ]
];