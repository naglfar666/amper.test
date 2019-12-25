<?php


namespace ExampleModule;


use Amper\Router;

class Routes
{
  public function _register(Router $Router) : void
  {
    $Router
      ->get('news', 'NewsController@index')
      ->get('test', 'TestController@index')
      ->get('datas', 'DatasController@index', ['DatasMiddleware']);
  }
}