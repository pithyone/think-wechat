<?php

namespace think;

use pithyone\wechat\Work;

/**
 * Class WeChat.
 */
class WeChat
{
    /**
     * @param string $agentId 企业应用id
     *
     * @return \pithyone\wechat\Work
     *
     * @author wangbing <pithyone@vip.qq.com>
     */
    public static function agent($agentId)
    {
        $config = Config::get('wechat');

        $config['debug'] = App::$debug;

        $work = new Work($config);

        return $work->setAgentId($agentId);
    }
}
