<?php
define('GLOBAL_DIR', __DIR__);
require_once(GLOBAL_DIR.'/config/bootstrapper.php');
Amper\Queue::push('SleepDispatcher', 0, ['data5']);
?>