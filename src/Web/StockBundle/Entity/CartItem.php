<?php
/**
 * Created by JetBrains PhpStorm.
 * User: nataliabernadskaya
 * Date: 03.09.15
 * Time: 15:36
 * To change this template use File | Settings | File Templates.
 */

namespace Web\StockBundle\Entity;

use Sylius\Component\Cart\Model\CartItem as BaseCartItem;

class CartItem extends BaseCartItem {

    private $product;

    public function getProduct()
    {
        return $this->product;
    }

    public function setProduct(Model $product)
    {
        $this->product = $product;
    }

}