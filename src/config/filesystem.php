<?php

return [
    'default' => 'local',
    'storage' => [
        'local'  => [
            'driver' => \yzh52521\filesystem\Adapter\LocalAdapter::class,
            'root'   => '',
            'url'    => '/'
        ],
        'memory' => [
            'driver' => \yzh52521\filesystem\Adapter\MemoryAdapter::class,
            'url'    => '/'
        ],
        's3'     => [
            'driver'                  => \yzh52521\filesystem\Adapter\S3Adapter::class,
            'credentials'             => [
                'key'    => 'S3_KEY',
                'secret' => 'S3_SECRET',
            ],
            'region'                  => 'S3_REGION',
            'version'                 => 'latest',
            'bucket_endpoint'         => false,
            'use_path_style_endpoint' => false,
            'endpoint'                => 'S3_ENDPOINT',
            'bucket_name'             => 'S3_BUCKET',
            'url'                     => '/'
        ],
        'oss'    => [
            'driver'       => \yzh52521\filesystem\Adapter\AliyunAdapter::class,
            'accessId'     => 'OSS_ACCESS_ID',
            'accessSecret' => 'OSS_ACCESS_SECRET',
            'bucket'       => 'OSS_BUCKET',
            'endpoint'     => 'OSS_ENDPOINT',
            'url'          => '/'
            // 'timeout' => 3600,
            // 'connectTimeout' => 10,
            // 'isCName' => false,
            // 'token' => null,
            // 'proxy' => null,
        ],
        'qiniu'  => [
            'driver'    => \yzh52521\filesystem\Adapter\QiniuAdapter::class,
            'accessKey' => 'QINIU_ACCESS_KEY',
            'secretKey' => 'QINIU_SECRET_KEY',
            'bucket'    => 'QINIU_BUCKET',
            'domain'    => 'QINBIU_DOMAIN',
            'url'       => '/'
        ],
        'cos'    => [
            'driver'        => \yzh52521\filesystem\Adapter\CosAdapter::class,
            'region'        => 'COS_REGION',
            'app_id'        => 'COS_APPID',
            'secret_id'     => 'COS_SECRET_ID',
            'secret_key'    => 'COS_SECRET_KEY',
            // 可选，如果 bucket 为私有访问请打开此项
            // 'signed_url' => false,
            'bucket'        => 'COS_BUCKET',
            'read_from_cdn' => false,
            'url'           => '/'
            // 'timeout' => 60,
            // 'connect_timeout' => 60,
            // 'cdn' => '',
            // 'scheme' => 'https',
        ],
    ],
];
