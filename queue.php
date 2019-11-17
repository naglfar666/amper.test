<?php
define('GLOBAL_DIR', __DIR__);
require_once(GLOBAL_DIR.'/config/bootstrapper.php');
// Amper\Queue::push('TestDispatcher', 0, ['email' => 'cherkashinmikhailv@gmail.com', 'body' => 'test3']);
while (true) {
  Amper\Queue::dispatchAll();
}

// $redis = Amper\Redis::create();
// print_r($redis->get('user_token_3'));
?>