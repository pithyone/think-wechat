<?php

namespace think;

use Psr\SimpleCache\CacheInterface;
use think\facade\Cache;

class CacheBridge implements CacheInterface
{
    public function get($key, $default = null)
    {
        return Cache::get($key, $default);
    }

    public function set($key, $value, $ttl = null)
    {
        Cache::set($key, $value, $ttl);
    }

    public function delete($key)
    {
        //
    }

    public function clear()
    {
        //
    }

    public function getMultiple($keys, $default = null)
    {
        //
    }

    public function setMultiple($values, $ttl = null)
    {
        //
    }

    public function deleteMultiple($keys)
    {
        //
    }

    public function has($key)
    {
        return Cache::has($key);
    }
}