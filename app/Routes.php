<?php
namespace App;

use Amper\Router;

class Routes
{

  public function _register(Router $Router) : void
  {
    $api_address = 'api\\v1\\';

    // $Router->options('/api/*', '', [ 'CorsMiddleware' ]);

    // $Router->group('api/v1',
    // [
    //   ['GET','{product}', $api_address.'ProductController@index'],
    //   ['POST','{product}/show', $api_address.'ProductController@show']
    // ]);

    $Router
      ->get('/api/v1/test', 'TestController@test');
  }
}


?>
