<?php

namespace Web\StockBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class YarnInStockAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('titleENG')
            ->add('color')
            ->add('colorENG')
            ->add('cost')
            ->add('weightInStock')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->addIdentifier('title')
            ->add('color')
            ->add('cost')
            ->add('weightInStock')
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
            ->add('title')
            ->add('titleENG')
            ->add('description','text')
            ->add('descriptionENG','text')
            ->add('color')
            ->add('colorENG')
            ->add('cost','number')
            ->add('weightInStock','number')
            ->add('photo','sonata_type_model', array())
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('title')
            ->add('titleENG')
            ->add('description')
            ->add('descriptionENG')
            ->add('color')
            ->add('colorENG')
            ->add('cost')
            ->add('weightInStock')
            ->add('id')
        ;
    }
}
