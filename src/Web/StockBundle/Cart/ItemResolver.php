<?php
/**
 * Created by JetBrains PhpStorm.
 * User: nataliabernadskaya
 * Date: 01.09.15
 * Time: 14:30
 * To change this template use File | Settings | File Templates.
 */

namespace Web\StockBundle\Cart;

use Sylius\Component\Cart\Model\CartItemInterface;
use Web\StockBundle\Cart\ItemResolverInterface;
use Sylius\Component\Cart\Resolver\ItemResolvingException;

use Doctrine\ORM\EntityManager;

class ItemResolver implements ItemResolverInterface {


    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    private function getItemInStockRepository()
    {
        return $this->entityManager->getRepository('WebStockBundle:ItemInStock');
    }

    //        WebStockBundle:ItemInStock заменен на Model для тестирования корзины

    private function getModelRepository()
    {
        return $this->entityManager->getRepository('WebStockBundle:Model');
    }

    public function resolve(CartItemInterface $item, $request)
    {
        $productId = $request->query->get('productId');

        // If no product id given, or product not found, we throw exception with nice message.

        if (!$productId || !$product = $this->getModelRepository()->find($productId)) {
            throw new ItemResolvingException('Requested model was not found');
        }

        // Assign the product to the item and define the unit price.
        $item->setProduct($product);
        $item->setSize($form->getData());
        $item->setUnitPrice($product->getCostRub());

        // Everything went fine, return the item.
        return $item;
    }

}