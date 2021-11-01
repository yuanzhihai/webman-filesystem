<?php

declare(strict_types=1);

namespace yzh52521\filesystem\Adapter;

use yzh52521\filesystem\Contract\AdapterInterface;

class CosAdapter implements AdapterInterface
{
    public function createAdapter(array $options)
    {
        return new \Overtrue\Flysystem\Cos\CosAdapter($options);
    }
}
