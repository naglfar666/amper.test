<?php


namespace ExampleModule\Repositories;


use Amper\CrudRepository;
use ExampleModule\Entities\TestEntity;

class TestRepo extends CrudRepository
{
  public function __construct()
  {
    parent::__construct(TestEntity::class);
  }
}