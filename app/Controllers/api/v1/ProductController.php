<?php
namespace App\Controllers\api\v1;

/**
 *
 */
class ProductController
{

  public function index($req, $res)
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

  public function show($req, $res)
  {
    return $res
      ->setStatus(200)
      ->setMeta(['type'=>'success'])
      ->setData(['show'=>'show'])
      ->toJson();
  }
}

?>
