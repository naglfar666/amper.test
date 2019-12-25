<?php


namespace ExampleModule\Controllers;


use Amper\Request;
use Amper\Response;

class NewsController
{
  public function index(Request $request, Response $response)
  {
    return $response
      ->setMeta(['type' => 'success'])
      ->setData(['news' => 'payload'])
      ->toJson();
  }
}