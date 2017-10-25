<?php

namespace think\Bridge;

use Doctrine\Common\Cache\CacheProvider;
use think\Cache;

class CacheBridge extends CacheProvider
{
    /**
     * {@inheritdoc}
     */
    protected function doFetch($id)
    {
        return Cache::get($id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains($id)
    {
        return Cache::has($id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave($id, $data, $lifeTime = 0)
    {
        return Cache::set($id, $data, $lifeTime);
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete($id)
    {
        return Cache::rm($id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        return Cache::clear();
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
    }
}
