<?php


namespace ExampleModule\Controllers;


use Amper\Request;
use Amper\Response;

class DatasController
{
  public function index(Request $request, Response $response)
  {
    return $response
      ->setMeta(['type' => 'success'])
      ->setData(['datas' => 'payload'])
      ->toJson();
  }
}