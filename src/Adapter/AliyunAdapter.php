<?php

declare(strict_types=1);

namespace yzh52521\Filesystem\Adapter;

use yzh52521\Filesystem\Contract\AdapterInterface;
use yzh52521\Flysystem\Oss\OssAdapter;

class AliyunAdapter implements AdapterInterface
{
    public function createAdapter(array $options)
    {
        return new OssAdapter($options);
    }
}
