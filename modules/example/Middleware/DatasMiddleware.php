<?php


namespace ExampleModule\Middleware;


use Amper\Request;
use Amper\Response;

class DatasMiddleware
{
  public function handle(Request $request, Response $response)
  {
    print_r($request->getHeaders());
  }
}