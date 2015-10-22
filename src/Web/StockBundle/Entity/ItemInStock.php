<?php

namespace Web\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Inventory\Model\StockableInterface;

/**
 * Item_In_Stock
 */
class ItemInStock implements StockableInterface
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $model;

    /**
     * @var string
     */
    private $size;

    /**
     * @var integer
     */
    private $weight;

    /**
     * @var boolean
     */
    private $isOnSale;


    /**
     * @ORM\Column(type="string")
     */
    protected $isbn;


    protected $onHold;

    /**
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * @ORM\Column(type="integer")
     */
    protected $onHand;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $availableOnDemand;


    private $itemOrder;
    private $itemOrders;


    public function __construct()
    {
        $this->onHand = 1;
        $this->availableOnDemand = true;
        $this->itemOrders = new \Doctrine\Common\Collections\ArrayCollection();

    }

    public function getIsbn()
    {
        return $this->isbn;
    }

    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    public function getSku()
    {
        return $this->getIsbn();
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getInventoryName()
    {
        return $this->getTitle();
    }

    public function isInStock()
    {
        return 0 < $this->onHand;
    }

    public function isAvailableOnDemand()
    {
        return $this->availableOnDemand;
    }

    public function setAvailableOnDemand($availableOnDemand)
    {
        $this->availableOnDemand = (Boolean) $availableOnDemand;
    }

    public function getOnHand()
    {
        return $this->onHand;
    }

    public function setOnHand($onHand)
    {
        $this->onHand = $onHand;
    }


    /**
     * Get stock on hold.
     *
     * @return integer
     */
    public function getOnHold(){
        return $this->onHold;

    }

    /**
     * Set stock on hold.
     *
     * @param integer
     */
    public function setOnHold($onHold){
        $this->onHold = $onHold;
    }

    /**
     * @param \Web\StockBundle\Entity\ItemOrder $itemOrder Set itemOrder
     *
     * @return ItemInStock
     */
    public function setItemOrder($itemOrder = null)
    {
        $this->itemOrder = $itemOrder;

        return $this;
    }


    public function addItemOrder(itemOrder $itemOrder)
    {
        $this->itemOrders[] = $itemOrder;
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
     * Set model
     *
     * @param \Web\StockBundle\Entity\Model $model
     * @return ItemInStock
     */
    public function setModel(Model $model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return \Web\StockBundle\Entity\Model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set size
     *
     * @param string $size
     * @return ItemInStock
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string 
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     * @return ItemInStock
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return integer 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set isOnSale
     *
     * @param boolean $isOnSale
     * @return ItemInStock
     */
    public function setIsOnSale($isOnSale)
    {
        $this->isOnSale = $isOnSale;

        return $this;
    }

    /**
     * Get isOnSale
     *
     * @return boolean 
     */
    public function getIsOnSale()
    {
        return $this->isOnSale;
    }


    public function __toString()
    {
        return $this->getTitle() ?: '-';
    }
}
