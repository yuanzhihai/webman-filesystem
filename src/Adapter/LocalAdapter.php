<?php

declare(strict_types=1);


namespace yzh52521\filesystem\Adapter;


use yzh52521\filesystem\Contract\AdapterInterface;
use League\Flysystem\Local\LocalFilesystemAdapter;

class LocalAdapter implements AdapterInterface
{
    public function createAdapter(array $options)
    {
        return new LocalFilesystemAdapter($options['root']);
    }
}
