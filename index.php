<?php
/**
 * asdasd
 */
class Test {
  /**
   * @ORM//id
   */
  private $id;
  /**
   * @DATA//id
   */
  public static function go()
  {
    // code...
  }
}
/*
$Data = new ReflectionClass('Test');
var_dump($Data->getMethods()[0]->getDocComment());

*/
$start = microtime(true);
$server_start = memory_get_usage(); // Нагрузка на сервер

require_once('vendor/autoload.php');

define('GLOBAL_DIR', __DIR__);
//composer dump-autoload -o
$Core = new Amper\Core();
$Core->run();
// var_dump(opcache_get_status());
// $User = new App\Entities\UserEntity;
// // $User->setId(3);
// $User->setName('Bobster');
// $User->setFname('Bob fname new');
// $User->getMyName();
// $UserRepo = new App\Repositories\UserRepo;
// $UserRepo->remove(5);
// var_dump($UserRepo->save($User));
// var_dump($UserRepo->findAllByIdOrName(1,'zxc'));
// $UserRepo->findByIdOrderByIdLimit(1,5);
// var_dump($UserRepo->findAll());

function FBytes($bytes, $precision = 2) {
    $units = array('B', 'KB', 'MB', 'GB', 'TB');
    $bytes = max($bytes, 0);
    $pow = floor(($bytes?log($bytes):0)/log(1024));
    $pow = min($pow, count($units)-1);
    $bytes /= pow(1024, $pow);
    return round($bytes, $precision).' '.$units[$pow];
}

//print_r(E::$Errors);
echo 'Памяти '.FBytes(memory_get_usage() - $server_start).'<br>'; // Нагрузка на сервер
echo "Время выполнения скрипта: ".(microtime(true) - $start).'<br>';
?>
