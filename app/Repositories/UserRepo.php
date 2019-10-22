<?php
namespace App\Repositories;

use Amper\CrudRepository;
use \App\Entities\UserEntity;

class UserRepo extends CrudRepository {

  public function __construct()
  {
    parent::__construct(UserEntity::class);
  }
  
}
?>
