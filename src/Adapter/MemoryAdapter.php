<?php
declare(strict_types=1);

namespace yzh52521\Filesystem\Adapter;

use League\Flysystem\InMemory\InMemoryFilesystemAdapter;
use yzh52521\Filesystem\Contract\AdapterInterface;

class MemoryAdapter implements AdapterInterface
{
    public function createAdapter(array $options)
    {
        return new InMemoryFilesystemAdapter();
    }
}
