<?php
/**
 * Created by PhpStorm.
 * User: nevada
 * Date: 16.01.14
 * Time: 10:41
 */

namespace Web\Bundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class FrontendBuilder extends ContainerAware {

    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav navbar-right')
            ->addChild('menu.collection', array('route' => 'collection'))
            ->setExtra('translation_domain', 'WebStockBundle');
        $menu
            ->addChild('menu.delivery', array('route' => 'page_delivery'))
            ->setExtra('translation_domain', 'WebStockBundle');
        $menu
            ->addChild('menu.return', array('route' => 'page_return'))
            ->setExtra('translation_domain', 'WebStockBundle');
        $menu
            ->addChild('menu.about', array('route' => 'page_about'))
            ->setExtra('translation_domain', 'WebStockBundle');
        $menu
            ->addChild('menu.order', array('route' => 'order_new'))
            ->setExtra('translation_domain', 'WebStockBundle');

//        $menu
//            ->addChild('menu.cart', array('uri' => '#'))
//            ->setExtra('translation_domain', 'WebStockBundle');

        return $menu;
    }

    public function footerMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav navbar-right')
            ->addChild('menu.collection', array('route' => 'collection'))
            ->setExtra('translation_domain', 'WebStockBundle');
        $menu
            ->addChild('menu.delivery', array('route' => 'page_delivery'))
            ->setExtra('translation_domain', 'WebStockBundle');
        $menu
            ->addChild('menu.return', array('route' => 'page_return'))
            ->setExtra('translation_domain', 'WebStockBundle');
        $menu
            ->addChild('menu.about', array('route' => 'page_about'))
            ->setExtra('translation_domain', 'WebStockBundle');
        $menu
            ->addChild('menu.order', array('route' => 'order_new'))
            ->setExtra('translation_domain', 'WebStockBundle');

//        $menu
//            ->addChild('menu.cart', array('uri' => '#'))
//            ->setExtra('translation_domain', 'WebStockBundle');

        return $menu;
    }


} 