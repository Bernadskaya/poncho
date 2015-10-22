<?php
/**
 * Created by JetBrains PhpStorm.
 * User: nataliabernadskaya
 * Date: 04.09.15
 * Time: 17:14
 * To change this template use File | Settings | File Templates.
 */

namespace Web\StockBundle\Entity;


use Sylius\Component\Inventory\Model\InventoryUnit as BaseInventoryUnit;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="app_inventory_unit")
 */
class InventoryUnit extends BaseInventoryUnit
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}