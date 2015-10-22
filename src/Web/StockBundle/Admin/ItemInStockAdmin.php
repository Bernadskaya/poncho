<?php

namespace Web\StockBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Web\StockBundle\Entity\Model;

class ItemInStockAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('isOnSale')
//            ->add('quantityInStock')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('size')
            ->add('model')
            ->add('weight')
            ->add('isOnSale')
//            ->add('quantityInStock')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('model', 'sonata_type_model', array())
            ->add('size', 'sonata_type_model', array())
            ->add('weight','number')
            ->add('isOnSale')
//            ->add('quantityInStock','number')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('size')
            ->add('weight')
            ->add('isOnSale')
//            ->add('quantityInStock')
            ->add('id')
        ;
    }
}
