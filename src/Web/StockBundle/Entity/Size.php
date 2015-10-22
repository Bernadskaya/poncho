<?php

namespace Web\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Web\StockBundle\Entity\Model;
/**
 * Size
 */
class Size
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $models;


    public function __construct()
    {
        $this->models = new \Doctrine\Common\Collections\ArrayCollection();
    }



    /**
     * @param \Web\StockBundle\Entity\Model $model Set model
     *
     * @return Model
     */
    public function setModel($model = null)
    {
        $this->model = $model;

        return $this;
    }


    public function addModel(Model $model)
    {
        $this->models[] = $model;
    }

    /**
     * Get gallery
     *
     * @return \Web\StockBundle\Entity\Model
     */
    public function getModels()
    {
        return $this->models;

    }



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Size
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
//
//    /**
//     * Set model
//     *
//     * @param string $model
//     * @return Size
//     */
//    public function setModels($models)
//    {
//        $this->models = $models;
//
//        return $this;
//    }


    public function __toString()
    {
        return $this->getName() ?: '-';
    }
}
