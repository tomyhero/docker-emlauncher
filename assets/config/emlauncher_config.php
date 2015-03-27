<?php
require_once APP_ROOT.'/libs/aws/aws-autoloader.php';

$emlauncher_config = array(
        'ec2' => array(
                'mail_sender' => 'EMLauncher <no-reply@example.com>',
                'title_prefix' => '',
                'enable_https' => false,
                'login' => array(
                        'enable_password' => {{EMLAUNCHER_LOGIN_ENABLE_PASSWORD}},
                        'enable_google_auth' => {{EMLAUNCHER_LOGIN_ENABLE_GOOGLE_AUTH}},
                        'google_app_id' => '{{EMLAUNCHER_LOGIN_GOOGLE_APP_ID}}',
                        'google_app_secret' => '{{EMLAUNCHER_LOGIN_GOOGLE_APP_SECRET}}',
                        'allowed_mailaddr_pattern' => '{{EMLAUNCHER_LOGIN_ALLOWED_MAILADDR_PATTERN}}',
                        ),

                'aws' => array(
                        'key' => '{{EMLAUNCHER_AWS_KEY}}',
                        'secret' => '{{EMLAUNCHER_AWS_SECRET}}',
                        'region' => {{EMLAUNCHER_AWS_REGION}},
                        'bucket_name' => '{{EMLAUNCHER_AWS_BUCKET_NAME}}',
                        ),
                ),
        );
$emlauncher_config['local'] = $emlauncher_config['ec2'];
$emlauncher_config['local']['login']['enable_google_auth'] = false;
$emlauncher_config['local']['aws']['bucket_name'] = 'emlauncher-dev';
