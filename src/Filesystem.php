<?php
/**
 *-------------------------------------------------------------------------p*
 *
 *-------------------------------------------------------------------------h*
 * @copyright  Copyright (c) 2015-2021 Phcent Inc. (http://www.phcent.com)
 *-------------------------------------------------------------------------c*
 * @license    http://www.phcent.com        p h c e n t . c o m
 *-------------------------------------------------------------------------e*
 * @link       http://www.phcent.com
 *-------------------------------------------------------------------------n*
 * @since      8988354@qq.com
 *-------------------------------------------------------------------------t*
 */

namespace yzh52521\filesystem;

use yzh52521\filesystem\Adapter\LocalAdapter;
use yzh52521\filesystem\Contract\AdapterInterface;
use League\Flysystem\Config;
use League\Flysystem\Filesystem as FilesystemObj;
use support\Container;

class Filesystem
{
    protected static $_instance = null;

    public static function storage($adapterName = null): FilesystemObj
    {
        if (!static::$_instance) {
            $options =  self::getConfig();
            if (is_null($adapterName)) {
                $adapterName = $options['default'];
            }
            $adapter           = static::getAdapter($options, $adapterName);
            static::$_instance = new FilesystemObj($adapter, $options['storage'][$adapterName] ?? []);
        }
        return static::$_instance;
    }

    public static function getConfig(string $name = null)
    {
        if (!is_null($name)) {
            return config('filesystem.' . $name);
        }
        return config('filesystem');
    }

    public static function getStorageConfig($adapterName, $name = null)
    {
        if ($config = self::getConfig("storage.{$adapterName}")) {
            return $config[$name];
        }
        throw new InvalidArgumentException("storage [$adapterName] not found.");
    }

    public static function getAdapter($options, $adapterName)
    {
        if (!$options['storage'] || !$options['storage'][$adapterName]) {
            throw new \Exception("file configurations are missing {$adapterName} options");
        }
        /** @var AdapterInterface $driver */
        $driver = Container::get($options['storage'][$adapterName]['driver']);
        return $driver->createAdapter($options['storage'][$adapterName]);
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return static::storage()->{$name}(... $arguments);
    }
}
