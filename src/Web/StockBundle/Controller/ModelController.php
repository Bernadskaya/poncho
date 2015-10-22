<?php

namespace Web\StockBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ModelController extends Controller
{
    public function collectionAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $repository = $em->getRepository('WebStockBundle:Model');

        $locale = $request->getLocale();
        $entities = $repository->findAll();
        return $this->render('WebStockBundle:Model:collection.html.twig', array(
            'entities' => $entities
            ));
    }

    public function showAction($id,$slug)
    {
        $em = $this->getDoctrine();
        $entity = $em->getRepository('WebStockBundle:Model')->find($id);
        $items = $em->getRepository('WebStockBundle:ItemInStock')->findByModel($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Model entity.');
        }
        return $this->render('WebStockBundle:Model:show.html.twig', array(
            'entity'      => $entity,
            'items'       => $items
        ));    }

    public function collectionEngAction()
    {
        return $this->render('WebStockBundle:Model:collectionEng.html.twig', array(
                // ...
            ));
    }

    public function showEngAction($id, $slugENG)
    {
        return $this->render('WebStockBundle:Model:showEng.html.twig', array(
                // ...
            ));    }

    public function cartAction()
    {
        return $this->render('WebStockBundle:Model:cart.html.twig', array(
                // ...
            ));    }

    public function cartEngAction()
    {
        return $this->render('WebStockBundle:Model:cartEng.html.twig', array(
                // ...
            ));    }

    public function addCartAction()
    {
        return $this->render('WebStockBundle:Model:addCart.html.twig', array(
                // ...
            ));    }

    public function clearCartAction()
    {
        return $this->render('WebStockBundle:Model:clearCart.html.twig', array(
                // ...
            ));    }

}
