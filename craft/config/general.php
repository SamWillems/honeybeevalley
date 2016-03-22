<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
    '*' => array(
        'omitScriptNameInUrls'  => true,
        'maxUploadFileSize'     => 33554432,
    ),

    'honeybeevalley.dev' => array(
        'devMode'   => true,
        'siteUrl'   => array(
            'nl_be' => 'http://honeybeevalley.dev/',
            'fr_be' => 'http://honeybeevalley.dev/fr/',
            'en'    => 'http://honeybeevalley.dev/en/',
        ),
        'environmentVariables' => array(
            'basePath'         => '/var/www/public/',
            'baseUrl'          => 'http://honeybeevalley.dev/',
			'assetsBaseUrl'    => 'http://honeybeevalley.dev/assets/',
        )
    ),

    'honeybeevalley.eu' => array(
        'devMode'   => false,
        'siteUrl'   => array(
            'nl_be' => 'http://honeybeevalley.eu/',
            'fr_be' => 'http://honeybeevalley.eu/fr/',
            'en'    => 'http://honeybeevalley.eu/en/',
        ),
        'environmentVariables' => array(
            'basePath'         => '/public_html/',
            'baseUrl'          => 'http://honeybeevalley.eu/',
			'assetsBaseUrl'    => 'http://honeybeevalley.eu/assets/',
        )
    ),

    'staging.honeybeevalley.eu' => array(
        'devMode'   => false,
        'siteUrl'   => array(
            'nl_be' => 'http://staging.honeybeevalley.eu/',
            'fr_be' => 'http://staging.honeybeevalley.eu/fr/',
            'en'    => 'http://staging.honeybeevalley.eu/en/',
        ),
        'environmentVariables' => array(
            'basePath'         => '/home/honeybe6/staging/public_html/',
            'baseUrl'          => 'http://staging.honeybeevalley.eu/',
			'assetsBaseUrl'    => 'http://staging.honeybeevalley.eu/assets/',
        )
    )
);