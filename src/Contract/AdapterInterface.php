<?php

namespace yzh52521\filesystem\Contract;


interface AdapterInterface
{
    /**
     * @param array $options
     * @return mixed
     */
    public function createAdapter(array $options);
}
