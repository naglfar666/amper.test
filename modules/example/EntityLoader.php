<?php


namespace ExampleModule;


class EntityLoader
{
  public function _register()
  {
    return [
      'NewsEntity',
      'DatasEntity',
      'TestEntity'
    ];
  }
}