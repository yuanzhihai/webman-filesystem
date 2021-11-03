<?php

declare(strict_types=1);


namespace yzh52521\Filesystem\Adapter;

use Aws\Handler\GuzzleV6\GuzzleHandler;
use Aws\S3\S3Client;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use League\Flysystem\AwsS3V3\AwsS3V3Adapter;
use yzh52521\Filesystem\Contract\AdapterInterface;

class S3Adapter implements AdapterInterface
{
    public function createAdapter(array $options)
    {
        $handler = new GuzzleHandler();
        $options = array_merge($options, ['http_handler' => $handler]);
        $client  = new S3Client($options);
        return new AwsS3V3Adapter($client, $options['bucket_name'], '');
    }
}
