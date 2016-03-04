<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(
    '*' => array(
        'tablePrefix'       => 'craft',
    ),
    
    'honeybeevalley.dev'    => array(
        'server'            => 'honeybeevalley.eu',
        'user'              => 'honeybe6_stagusr',
        'password'          => '*M}}mgXA)Omx',
        'database'          => 'honeybe6_staging-db',
    ),

    'honeybeevalley.eu'     => array(
        'server'            => 'localhost',
        'user'              => 'honeybe6_user',
        'password'          => 'I^^uZ%{Q==dW',
        'database'          => 'honeybe6_live-db',
    ),

    'staging.honeybeevalley.eu'  => array(
        'server'            => 'localhost',
        'user'              => 'honeybe6_stagusr',
        'password'          => '*M}}mgXA)Omx',
        'database'          => 'honeybe6_staging-db',
    ),

);
