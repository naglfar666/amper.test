<?php
namespace App\Entities;

use Amper\Entity;

/**
 * @Table : name=user
 */
class UserEntity extends Entity{
  /**
   * @Id
   * @GeneratedValue : AUTO_INCREMENT
   * @Integer
   * @Field : name=id, type=integer, length=11
   */
  private $id;

  /**
   * @String
   * @Field : name=fname, type=varchar, length=255
   */
  private $fname;

  /**
   * @String
   * @Field : name=name, type=varchar, length=255
   */
  private $name;
}
?>
