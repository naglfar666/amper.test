<?php
namespace App\Controllers;

use \App\Repositories\UserRepo;
/**
 *
 */
class TestController
{

  public function product($req, $res)
  {
    print_r($req->getHeaders());
    print_r($req->getBody());
    print_r($req->getMethod().PHP_EOL);
    print_r($req->getParams());
    print_r($req->getQuery());

    return $res
      ->setStatus(200)
      ->setMeta(['type'=>'success'])
      ->setData(['some'=>'text'])
      ->toJson();
  }

  public function test($req, $res)
  {
    // print_r($req->getHeaders());
    // print_r($req->getBody());
    // print_r($req->getMethod().PHP_EOL);
    // print_r($req->getParams());
    // print_r($req->getQuery());
    // $userRepo = new UserRepo();
    // print_r($userRepo->findAllByKeyValDataTestAndSecondValTest('xc','z'));

    return $res
      ->setStatus(200)
      ->setMeta(['type'=>'success'])
      ->setData(['test'=>'test'])
      ->toJson();
  }
}

?>
