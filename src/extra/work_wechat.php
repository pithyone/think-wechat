<?php

use think\Bridge\CacheBridge;
use think\Bridge\LoggerBridge;

return [
    'cache'    => new CacheBridge(),
    'logger'   => new LoggerBridge(),
    'corp_id'  => 'your-corp-id',
    'contacts' => [
        'token'   => 'your-contacts-agent-token',
        'aes_key' => 'your-contacts-agent-aes-key',
        'secret'  => 'your-contacts-agent-secret',
    ],
    'test'     => [
        'agent_id' => 'your-test-agent-id',
        'token'    => 'your-test-agent-token',
        'aes_key'  => 'your-test-agent-aes-key',
        'secret'   => 'your-test-agent-secret',
    ],
];
