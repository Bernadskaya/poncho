<?php

namespace Web\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Country
 */
class Country
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;



private $status;

    /**
     * @param boolean $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
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
     * @return Country
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


    private $shipmentVariants;

    private $shipmentVariant;


    public function __construct()
    {
        $this->shipmentVariants = new \Doctrine\Common\Collections\ArrayCollection();
    }



    /**
     * @param \Web\StockBundle\Entity\ShipmentVariant $shipmentVariant Set shipmentVariant
     *
     * @return Country
     */
    public function setShipmentVariant($shipmentVariant = null)
    {
        $this->shipmentVariant = $shipmentVariant;

        return $this;
    }


    public function addShipmentVariant(shipmentVariant $shipmentVariant)
    {
        $this->shipmentVariants[] = $shipmentVariant;
    }

    /**
     * Get shipmentVariant
     *
     * @return \Web\StockBundle\Entity\ShipmentVariant
     */
    public function getShipmentVariants()
    {
        return $this->shipmentVariants;

    }

    public function __toString()
    {
        return $this->getName() ?: '-';
    }
}
