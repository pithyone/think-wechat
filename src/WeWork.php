<?php

namespace think;

use WeWork\App;

class WeWork
{
    /**
     * @var App
     */
    protected $app;

    /**
     * WeWork constructor.
     *
     * @param string $default
     */
    public function __construct($default = '')
    {
        $wework = config('wework.');

        $default = $default ?: $wework['default'];

        $agent = $wework['agents'][$default];

        $config = array_merge($agent, $wework);

        $config['log'] = LogBridge::class;

        $config['cache'] = CacheBridge::class;

        $this->app = new App($config);
    }

    /**
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        return call_user_func_array([$this->app, $name], $arguments);
    }
}