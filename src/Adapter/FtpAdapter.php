<?php

declare(strict_types=1);

namespace yzh52521\filesystem\Adapter;

use League\Flysystem\Ftp\ConnectivityCheckerThatCanFail;
use League\Flysystem\Ftp\FtpConnectionOptions;
use League\Flysystem\Ftp\NoopCommandConnectivityChecker;
use yzh52521\filesystem\Contract\AdapterInterface;

class FtpAdapter implements AdapterInterface
{
    public function createAdapter(array $options)
    {
        $options             = FtpConnectionOptions::fromArray($options);
        $connectivityChecker = new ConnectivityCheckerThatCanFail(new NoopCommandConnectivityChecker());
        return new \League\Flysystem\Ftp\FtpAdapter($options, null, $connectivityChecker);
    }
}
