<?php

require_once(__DIR__ . '/vendor/autoload.php');

use PhpAmqpLib\Connection\AMQPStreamConnection;

$config =
    [
        'host' => 'rabbit',
        'port' => 5672,
        'user' => 'guest',
        'password' => 'guest',
    ];

function getConnection($config_amqp)
{
    return new AMQPStreamConnection($config_amqp['host'], $config_amqp['port'], $config_amqp['user'], $config_amqp['password']);
}

for ($i = 0; $i < 1000; $i++) {
    $conn = getConnection($config);
}

