<?php

namespace think;


use pithyone\wechat\Work;

/**
 * Class WeChat
 *
 * @package think
 */
class WeChat
{
    /**
     * @param string $agentId 企业应用id
     *
     * @return Work
     * @author wangbing <pithyone@vip.qq.com>
     */
    public static function agent($agentId)
    {
        $work = new Work(Config::get('wechat'));

        return $work->setAgentId($agentId);
    }
}