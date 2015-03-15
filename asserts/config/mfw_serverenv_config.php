<?php
$serverenv_config = array(
        'application_identifier' => 'ohoflight2',
        'ec2' => array(
                'database' => array(
                        'authfile' => '/home/emlauncher/config/dbauth',
                        'default_master' => 'mysql:dbname=emlauncher;host={{DB_HOST}}',
                'http_proxy' => array(
                        ),
                'memcache' => array(
                        'host' => 'localhost',
                        'port' => 11211,
                        ),
                ),
        );

$serverenv_config['local'] = $serverenv_config['ec2'];
