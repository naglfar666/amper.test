<?php
namespace App\Entities;

use Amper\Entity;

/**
 * @Table : name=user
 */
class UserEntity extends Entity{
  /**
   * @Id
   * @GeneratedValue : strategy=AUTO_INCREMENT
   * @Field : name=id, type=int, length=11
   * @NotNull
   * @var integer
   */
  private $id;

  /**
   * @Field : name=fname, type=varchar, length=255
   * @NotNull
   * @var string
   */
  private $fname;

  /**
   * @Field : name=name, type=varchar, length=255
   * @NotNull
   * @var string
   */
  private $name;

  /**
   * @Field
   * @Nullable
   * @var string
   */
  private $oname;

  /**
   * @Field : name=date_add, type=int
   * @NotNull
   * @var integer
   */
  private $dateAdd;

  /**
   * @Field : name=key_val_data_test, type=varchar
   * @Nullable
   * @var string
   */
  private $keyValDataTest;
  /**
   * @Field : name=second_val_test, type=varchar
   * @Nullable
   * @var string
   */
  private $secondValTest;


  /**
   * Get the value of id
   *
   * @return  integer
   */ 
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @param  integer  $id
   *
   * @return  self
   */ 
  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Get the value of fname
   *
   * @return  string
   */ 
  public function getFname()
  {
    return $this->fname;
  }

  /**
   * Set the value of fname
   *
   * @param  string  $fname
   *
   * @return  self
   */ 
  public function setFname(string $fname)
  {
    $this->fname = $fname;

    return $this;
  }

  /**
   * Get the value of name
   *
   * @return  string
   */ 
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @param  string  $name
   *
   * @return  self
   */ 
  public function setName(string $name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of oname
   *
   * @return  string
   */ 
  public function getOname()
  {
    return $this->oname;
  }

  /**
   * Set the value of oname
   *
   * @param  string  $oname
   *
   * @return  self
   */ 
  public function setOname(string $oname)
  {
    $this->oname = $oname;

    return $this;
  }

  /**
   * Get the value of dateAdd
   *
   * @return  integer
   */ 
  public function getDateAdd()
  {
    return $this->dateAdd;
  }

  /**
   * Set the value of dateAdd
   *
   * @param  integer  $dateAdd
   *
   * @return  self
   */ 
  public function setDateAdd($dateAdd)
  {
    $this->dateAdd = $dateAdd;

    return $this;
  }

  /**
   * Get the value of keyValDataTest
   *
   * @return  string
   */ 
  public function getKeyValDataTest()
  {
    return $this->keyValDataTest;
  }

  /**
   * Set the value of keyValDataTest
   *
   * @param  string  $keyValDataTest
   *
   * @return  self
   */ 
  public function setKeyValDataTest(string $keyValDataTest)
  {
    $this->keyValDataTest = $keyValDataTest;

    return $this;
  }

  /**
   * Get the value of secondValTest
   *
   * @return  string
   */ 
  public function getSecondValTest()
  {
    return $this->secondValTest;
  }

  /**
   * Set the value of secondValTest
   *
   * @param  string  $secondValTest
   *
   * @return  self
   */ 
  public function setSecondValTest(string $secondValTest)
  {
    $this->secondValTest = $secondValTest;

    return $this;
  }
}
?>
