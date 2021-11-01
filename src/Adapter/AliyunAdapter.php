<?php

declare(strict_types=1);

namespace yzh52521\filesystem\Adapter;

use yzh52521\filesystem\Contract\AdapterInterface;
use yzh52521\Flysystem\Oss\OssAdapter;

class AliyunAdapter implements AdapterInterface
{
    public function createAdapter(array $options)
    {
        return new OssAdapter($options);
    }
}
