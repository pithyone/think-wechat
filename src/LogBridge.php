<?php

namespace think;

use Psr\Log\AbstractLogger;
use think\facade\Log;

class LogBridge extends AbstractLogger
{
    public function log($level, $message, array $context = [])
    {
        Log::log($level, $message, $context);
    }
}