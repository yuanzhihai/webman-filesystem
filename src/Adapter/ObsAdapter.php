<?php

declare(strict_types=1);

namespace yzh52521\Filesystem\Adapter;

use yzh52521\Filesystem\Contract\AdapterInterface;

class ObsAdapter implements AdapterInterface
{
    public function createAdapter(array $options)
    {
        return new \yzh52521\Flysystem\Obs\ObsAdapter($options);
    }
}
