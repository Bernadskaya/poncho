<?php

namespace Web\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DispatureDate
 */
class DispatureDate
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $toOrderDate;

    /**
     * @var integer
     */
    private $vacancyOrder;

    /**
     * @param int $vacancyOrder
     */
    public function setVacancyOrder($vacancyOrder)
    {
        $this->vacancyOrder = $vacancyOrder;
    }

    /**
     * @return int
     */
    public function getVacancyOrder()
    {
        return $this->vacancyOrder;
    }

    /**
     * @var boolean
     */
    private $isOpen;

    private $itemOrder;


    private $itemOrders;

    public function __construct()
    {
        $this->itemOrders = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @param mixed $itemOrder
     */
    public function setItemOrder($itemOrder)
    {
        $this->itemOrder = $itemOrder;
    }

    /**
     * @return mixed
     */
    public function getItemOrder()
    {
        return $this->itemOrder;
    }



    public function addItemOrder(ItemOrder $itemOrder)
    {
        $this->itemOrders[] = $itemOrder;
    }
    /**
     * @param mixed $itemOrders
     */
    public function setItemOrders($itemOrders)
    {
        $this->itemOrders = $itemOrders;
    }

    /**
     * @return mixed
     */
    public function getItemOrders()
    {
        return $this->itemOrders;
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
     * Set toOrderDate
     *
     * @param \DateTime $toOrderDate
     * @return DispatureDate
     */
    public function setToOrderDate($toOrderDate)
    {
        $this->toOrderDate = $toOrderDate;

        return $this;
    }

    /**
     * Get toOrderDate
     *
     * @return \DateTime 
     */
    public function getToOrderDate()
    {
        return $this->toOrderDate;
    }

    /**
     * Set isOpen
     *
     * @param boolean $isOpen
     * @return DispatureDate
     */
    public function setIsOpen($isOpen)
    {
        $this->isOpen = $isOpen;

        return $this;
    }

    /**
     * Get isOpen
     *
     * @return boolean 
     */
    public function getIsOpen()
    {
        return $this->isOpen;
    }
}
