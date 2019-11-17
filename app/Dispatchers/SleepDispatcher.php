<?php
namespace App\Dispatchers;

class SleepDispatcher {
  /**
   * Обработка запроса очереди
   * @param array $params Запись из очереди
   */
  public function handle(array $params)
  {
    sleep(5);
    echo 'Dispatched sleep'.PHP_EOL;
    return true;
  }
}
?>