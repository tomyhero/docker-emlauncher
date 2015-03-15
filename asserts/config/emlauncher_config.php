<?php
require_once APP_ROOT.'/libs/aws/aws-autoloader.php';

$emlauncher_config = array(
        'ec2' => array(
                'mail_sender' => 'EMLauncher <no-reply@example.com>',
                'title_prefix' => '',
                'enable_https' => false,
                'login' => array(
                        'enable_password' => true,
                        'enable_google_auth' => true,
                        'google_app_id' => 'xxxxxxxx.apps.googleusercontent.com',
                        'google_app_secret' => 'xxxxxxxx',
                        'allowed_mailaddr_pattern' => '/@klab\.com$/',
                        ),

                'aws' => array(
                        'key' => 'xxxxxxxx',
                        'secret' => 'xxxxxxxx',
                        'region' => Aws\Common\Enum\Region::TOKYO,
                        'bucket_name' => 'emlauncher',
                        ),
                ),
        );
$emlauncher_config['local'] = $emlauncher_config['ec2'];
$emlauncher_config['local']['login']['enable_google_auth'] = false;
$emlauncher_config['local']['aws']['bucket_name'] = 'emlauncher-dev';
