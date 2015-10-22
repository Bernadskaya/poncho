<?php

namespace Web\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * YarnInStock
 */
class YarnInStock
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $titleENG;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $descriptionENG;

    /**
     * @var string
     */
    private $color;

    /**
     * @var string
     */
    private $colorENG;

    /**
     * @var integer
     */
    private $cost;

    /**
     * @var integer
     */
    private $weightInStock;

    private $photo;

    /**
     * @param mixed $photo
     */
    public function setPhoto(\Ant\MediaBundle\Entity\Media $photo)
    {
        $this->photo = $photo;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
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
     * Set title
     *
     * @param string $title
     * @return YarnInStock
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set titleENG
     *
     * @param string $titleENG
     * @return YarnInStock
     */
    public function setTitleENG($titleENG)
    {
        $this->titleENG = $titleENG;

        return $this;
    }

    /**
     * Get titleENG
     *
     * @return string 
     */
    public function getTitleENG()
    {
        return $this->titleENG;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return YarnInStock
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set descriptionENG
     *
     * @param string $descriptionENG
     * @return YarnInStock
     */
    public function setDescriptionENG($descriptionENG)
    {
        $this->descriptionENG = $descriptionENG;

        return $this;
    }

    /**
     * Get descriptionENG
     *
     * @return string 
     */
    public function getDescriptionENG()
    {
        return $this->descriptionENG;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return YarnInStock
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set colorENG
     *
     * @param string $colorENG
     * @return YarnInStock
     */
    public function setColorENG($colorENG)
    {
        $this->colorENG = $colorENG;

        return $this;
    }

    /**
     * Get colorENG
     *
     * @return string 
     */
    public function getColorENG()
    {
        return $this->colorENG;
    }

    /**
     * Set cost
     *
     * @param integer $cost
     * @return YarnInStock
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return integer 
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set weightInStock
     *
     * @param integer $weightInStock
     * @return YarnInStock
     */
    public function setWeightInStock($weightInStock)
    {
        $this->weightInStock = $weightInStock;

        return $this;
    }

    /**
     * Get weightInStock
     *
     * @return integer 
     */
    public function getWeightInStock()
    {
        return $this->weightInStock;
    }

    public function __toString()
    {
        return $this->getTitle() ?: '-';
    }
}
