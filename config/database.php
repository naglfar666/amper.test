<?php
return [
  'connection' => [
    'prefix' => 'amptest_',
    'user' => 'root',
    'password' => '',
    'driver' => 'mysql',
    'host' => 'localhost',
    'name' => 'amper_test'
  ],
  'redis' => [
    'scheme' => 'tcp',
    'host'   => '127.0.0.1',
    'port'   => 6379,
  ],
  'entities' => [
    'UserEntity'
  ]

];
?>
