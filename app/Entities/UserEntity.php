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
   * @Field : name=id, type=integer, length=11
   * @var integer
   */
  private $id;

  /**
   * @Field : name=fname, type=varchar, length=255
   * @var string
   */
  private $fname;

  /**
   * @Field : name=name, type=varchar, length=255
   * @var string
   */
  private $name;



    /**
     * Get the value of Id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param integer id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Fname
     *
     * @return string
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * Set the value of Fname
     *
     * @param string fname
     *
     * @return self
     */
    public function setFname($fname)
    {
        $this->fname = $fname;

        return $this;
    }

    /**
     * Get the value of Name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name
     *
     * @param string name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

}
?>
