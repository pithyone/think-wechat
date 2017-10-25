<?php

namespace think\Bridge;

use Monolog\Handler\AbstractProcessingHandler;
use think\Log;

class LoggerBridge extends AbstractProcessingHandler
{
    /**
     * {@inheritdoc}
     */
    protected function write(array $record)
    {
        Log::record($record['formatted'], strtolower($record['level_name']));
    }
}
