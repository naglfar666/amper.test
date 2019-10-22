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

require_once('vendor/autoload.php');

define('GLOBAL_DIR', __DIR__);
//composer dump-autoload -o
$Core = new Amper\Core();
$Core->run();

// $User = new App\Entities\UserEntity;
// $User->getMyName();
$UserRepo = new App\Repositories\UserRepo;
var_dump($UserRepo->findAll());
?>
