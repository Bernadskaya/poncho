<?php

namespace Web\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShipmentVariant
 */
class ShipmentVariant
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
     * @var integer
     */
    private $cost;

    /**
     * @var integer
     */
    private $deliveryTime;

    /**
     * @param \Web\StockBundle\Entity\Country
     */
    private $countryId;
    private $countries;
    private $money;

    /**
     * @param mixed $money
     */
    public function setMoney($money)
    {
        $this->money = $money;
    }

    /**
     * @return mixed
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * @var boolean
     */
    private $status;

    public function __construct() {
        $this->countries = new \Doctrine\Common\Collections\ArrayCollection();
    }


    public function addCountries(Country $countryId)
    {
        $countryId->addShipmentVariant($this); // synchronously updating inverse side
        $this->countries[] = $countryId;
    }



    public function setCountries ($countries) {
        $this->countries = $countries;
        return $this;
    }

    public function getCountries(){
        return $this->countries;
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
     * @return ShipmentVariant
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

    /**
     * Set cost
     *
     * @param integer $cost
     * @return ShipmentVariant
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
     * Set deliveryTime
     *
     * @param integer $deliveryTime
     * @return ShipmentVariant
     */
    public function setDeliveryTime($deliveryTime)
    {
        $this->deliveryTime = $deliveryTime;

        return $this;
    }

    /**
     * Get deliveryTime
     *
     * @return integer 
     */
    public function getDeliveryTime()
    {
        return $this->deliveryTime;
    }

    /**
     * Set countryId
     *
     * @param \Web\StockBundle\Entity\Country $countryId
     * @return ShipmentVariant
     */
    public function setCountryId(Country $countryId)
    {
        $this->countryId = $countryId;

        return $this;
    }

    /**
     * Get countryId
     *
     * @return integer 
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return ShipmentVariant
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function __toString()
    {
        return $this->getName() ?: '-';
    }
}
