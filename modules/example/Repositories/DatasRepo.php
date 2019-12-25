<?php


namespace ExampleModule\Repositories;


use Amper\CrudRepository;
use ExampleModule\Entities\DatasEntity;

class DatasRepo extends CrudRepository
{

  /**
   * DatasRepo constructor.
   */
  public function __construct()
  {
    parent::__construct(DatasEntity::class);
  }
}