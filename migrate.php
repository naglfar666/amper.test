<?php
define('GLOBAL_DIR', __DIR__);
require_once(GLOBAL_DIR.'/config/bootstrapper.php');

$Migrate = new Amper\Migrate;
$Migrate->refresh();
?>