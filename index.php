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
// // $User->setId(3);
// $User->setName('Bobster');
// $User->setFname('Bob fname new');
// $User->getMyName();
$UserRepo = new App\Repositories\UserRepo;
$UserRepo->remove(5);
// var_dump($UserRepo->save($User));
// var_dump($UserRepo->findAllByIdOrName(1,'zxc'));
// $UserRepo->findByIdOrderByIdLimit(1,5);
// var_dump($UserRepo->findAll());
?>
