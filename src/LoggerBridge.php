<?php

namespace think;

use Monolog\Handler\AbstractProcessingHandler;

/**
 * Class LoggerBridge.
 */
class LoggerBridge extends AbstractProcessingHandler
{
    /**
     * {@inheritdoc}
     */
    protected function write(array $record)
    {
        Log::record($record);
    }
}
