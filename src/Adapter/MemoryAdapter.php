<?php
declare(strict_types=1);

namespace yzh52521\filesystem\Adapter;

use League\Flysystem\InMemory\InMemoryFilesystemAdapter;
use yzh52521\filesystem\Contract\AdapterInterface;

class MemoryAdapter implements AdapterInterface
{
    public function createAdapter(array $options)
    {
        return new InMemoryFilesystemAdapter();
    }
}
