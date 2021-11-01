<?php

declare(strict_types=1);


namespace yzh52521\filesystem\Adapter;

use yzh52521\filesystem\Contract\AdapterInterface;

class QiniuAdapter implements AdapterInterface
{
    public function createAdapter(array $options)
    {
        return new \Overtrue\Flysystem\Qiniu\QiniuAdapter(
            $options['accessKey'],
            $options['secretKey'],
            $options['bucket'],
            $options['domain']
        );
    }
}
