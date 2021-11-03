<?php

return [
    'default' => 'local',
    'storage' => [
        'local'  => [
            'driver' => \yzh52521\Filesystem\Adapter\LocalAdapter::class,
            'root'   => '',
            'url'    => '/'
        ],
        'memory' => [
            'driver' => \yzh52521\Filesystem\Adapter\MemoryAdapter::class,
            'url'    => '/'
        ],
        's3'     => [
            'driver'                  => \yzh52521\Filesystem\Adapter\S3Adapter::class,
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
            'driver'       => \yzh52521\Filesystem\Adapter\AliyunAdapter::class,
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
            'driver'    => \yzh52521\Filesystem\Adapter\QiniuAdapter::class,
            'accessKey' => 'QINIU_ACCESS_KEY',
            'secretKey' => 'QINIU_SECRET_KEY',
            'bucket'    => 'QINIU_BUCKET',
            'domain'    => 'QINBIU_DOMAIN',
            'url'       => '/'
        ],
        'cos'    => [
            'driver'        => \yzh52521\Filesystem\Adapter\CosAdapter::class,
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
        'obs'    => [
            'driver'     => \yzh52521\Filesystem\Adapter\ObsAdapter::class,
            'key'        => 'OBS_ACCESS_ID',
            // <Your Huawei OBS AccessKeyId>
            'secret'     => 'OBS_ACCESS_KEY',
            // <Your Huawei OBS AccessKeySecret>
            'bucket'     => 'OBS_BUCKET',
            // <OBS bucket name>
            'endpoint'   => 'OBS_ENDPOINT',
            // <the endpoint of OBS, E.g: (https:// or http://).obs.cn-east-2.myhuaweicloud.com | custom domain, E.g:img.abc.com> OBS 外网节点或自定义外部域名
            'cdn_domain' => 'OBS_CDN_DOMAIN',
            //<CDN domain, cdn域名> 如果isCName为true, getUrl会判断cdnDomain是否设定来决定返回的url，如果cdnDomain未设置，则使用endpoint来生成url，否则使用cdn
            'ssl_verify' => 'OBS_SSL_VERIFY',
            // <true|false> true to use 'https://' and false to use 'http://'. default is false,
            'debug'      => 'APP_DEBUG',
            // <true|false>
        ],
    ],
];
