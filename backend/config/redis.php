<?php

use yii\redis\Connection;

return [
    'redis' => [
        'class'    => Connection::class,
        'hostname' => 'redis',
        'port'     => '6379',
        'database' => 0,
    ],
    'redis_queue' => [
        'class'    => Connection::class,
        'hostname' => 'redis',
        'port'     => '6379',
        'database' => 1,
    ],
    'redis_cache' => [
        'class'    => Connection::class,
        'hostname' => 'redis',
        'port'     => '6379',
        'database' => 2,
    ],
];
