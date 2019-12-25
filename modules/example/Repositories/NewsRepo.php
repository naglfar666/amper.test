<?php


namespace ExampleModule\Repositories;


use Amper\CrudRepository;
use ExampleModule\Entities\NewsEntity;

class NewsRepo extends CrudRepository
{

  /**
   * NewsRepo constructor.
   */
  public function __construct()
  {
    parent::__construct(NewsEntity::class);
  }
}