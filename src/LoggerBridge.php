<?php

namespace think;

use Monolog\Handler\AbstractProcessingHandler;

/**
 * Class LoggerBridge
 *
 * @package think
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