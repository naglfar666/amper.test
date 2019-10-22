<?php
namespace App\Middleware;

use Amper\Request;
use Amper\Response;

class CorsMiddleware {

  public function handle(Request $request, Response $response)
  {
    header('Content-Type: text/html; charset=utf-8');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Headers: *');
    header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
    $response->finish();
  }

}
?>
