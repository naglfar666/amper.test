<?php


namespace ExampleModule\Controllers;


use Amper\Request;
use Amper\Response;

class TestController
{
  public function index(Request $request, Response $response)
  {
    return $response
      ->setMeta(['type' => 'success'])
      ->setData(['test' => 'controller'])
      ->toJson();
  }
}