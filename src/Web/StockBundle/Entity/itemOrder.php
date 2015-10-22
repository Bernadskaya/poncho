<?php

namespace Web\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * itemOrder
 */
class itemOrder
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $itemId;

    /**
     * @var string
     */
    private $status;

    /**
     * @var integer
     */
    private $summaryCost;

    /**
     * @var integer
     */
    private $shippingAddressId;

    /**
     * @var integer
     */
    private $billingAddressId;

    /**
     * @var integer
     */
    private $dispatureDateId;

    /**
     * @var string
     */
    private $paymentDate;

    /**
     * @var integer
     */
    private $realShipmentCost;

    /**
     * @var integer
     */
    private $shipmentVariantId;

private $items;

    public function __construct() {
        $this->items = new \Doctrine\Common\Collections\ArrayCollection();
    }


    public function addItems(ItemInStock $itemId)
    {
        $itemId->addItemOrder($this); // synchronously updating inverse side
        $this->items[] = $itemId;
    }



    public function setItems ($items) {
        $this->items = $items;
        return $this;
    }

    public function getItems(){
        return $this->items;
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
     * Set itemId
     *
     * @param integer $itemId
     * @return itemOrder
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;

        return $this;
    }

    /**
     * Get itemId
     *
     * @return integer 
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return itemOrder
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set summaryCost
     *
     * @param integer $summaryCost
     * @return itemOrder
     */
    public function setSummaryCost($summaryCost)
    {
        $this->summaryCost = $summaryCost;

        return $this;
    }

    /**
     * Get summaryCost
     *
     * @return integer 
     */
    public function getSummaryCost()
    {
        return $this->summaryCost;
    }

    /**
     * Set shippingAddressId
     *
     * @param integer $shippingAddressId
     * @return itemOrder
     */
    public function setShippingAddressId($shippingAddressId)
    {
        $this->shippingAddressId = $shippingAddressId;

        return $this;
    }

    /**
     * Get shippingAddressId
     *
     * @return integer 
     */
    public function getShippingAddressId()
    {
        return $this->shippingAddressId;
    }

    /**
     * Set billingAddressId
     *
     * @param integer $billingAddressId
     * @return itemOrder
     */
    public function setBillingAddressId($billingAddressId)
    {
        $this->billingAddressId = $billingAddressId;

        return $this;
    }

    /**
     * Get billingAddressId
     *
     * @return integer 
     */
    public function getBillingAddressId()
    {
        return $this->billingAddressId;
    }

    /**
     * Set dispatureDateId
     *
     * @param integer $dispatureDateId
     * @return itemOrder
     */
    public function setDispatureDateId($dispatureDateId)
    {
        $this->dispatureDateId = $dispatureDateId;

        return $this;
    }

    /**
     * Get dispatureDateId
     *
     * @return integer 
     */
    public function getDispatureDateId()
    {
        return $this->dispatureDateId;
    }

    /**
     * Set paymentDate
     *
     * @param string $paymentDate
     * @return itemOrder
     */
    public function setPaymentDate($paymentDate)
    {
        $this->paymentDate = $paymentDate;

        return $this;
    }

    /**
     * Get paymentDate
     *
     * @return string 
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * Set realShipmentCost
     *
     * @param integer $realShipmentCost
     * @return itemOrder
     */
    public function setRealShipmentCost($realShipmentCost)
    {
        $this->realShipmentCost = $realShipmentCost;

        return $this;
    }

    /**
     * Get realShipmentCost
     *
     * @return integer 
     */
    public function getRealShipmentCost()
    {
        return $this->realShipmentCost;
    }

    /**
     * Set shipmentVariantId
     *
     * @param integer $shipmentVariantId
     * @return itemOrder
     */
    public function setShipmentVariantId($shipmentVariantId)
    {
        $this->shipmentVariantId = $shipmentVariantId;

        return $this;
    }

    /**
     * Get shipmentVariantId
     *
     * @return integer 
     */
    public function getShipmentVariantId()
    {
        return $this->shipmentVariantId;
    }


}
