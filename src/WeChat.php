<?php

namespace think;

use pithyone\wechat\Work;
use think\Bridge\CacheBridge;
use think\Bridge\LoggerBridge;

class WeChat
{
    /**
     * @param string $agentId 应用ID
     *
     * @return Work
     */
    public static function agent($agentId)
    {
        $config = array_merge(Config::get('work_wechat'), [
            'debug'  => App::$debug,
            'cache'  => new CacheBridge(),
            'logger' => new LoggerBridge(),
        ]);

        $work = new Work($config);

        return $work->setAgentId($agentId);
    }
}
