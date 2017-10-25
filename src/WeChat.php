<?php

namespace think;

use pithyone\wechat\Work;

class WeChat
{
    /**
     * @param string $agentId 应用ID
     *
     * @return Work
     */
    public static function agent($agentId)
    {
        $config = Config::get('work_wechat');

        $config['debug'] = App::$debug;

        $work = new Work($config);

        return $work->setAgentId($agentId);
    }
}
