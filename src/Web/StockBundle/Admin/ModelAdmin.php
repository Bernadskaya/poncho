<?php

namespace Web\StockBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ModelAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('titleENG')
//            ->add('size')
            ->add('productionTime')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->addIdentifier('name')
//            ->add('size')
            ->add('productionTime')
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
            ->add('name')
            ->add('titleENG')
            ->add('description','text')
            ->add('descriptionENG','text')
            ->add('yarn','sonata_type_model_list', array(),array())
            ->add('sizes','sonata_type_model', array('expanded' => true, 'multiple' => true))
            ->add('productionTime', 'number')
            ->add('relatedModels', 'sonata_type_model', array('expanded' => true, 'multiple' => true))
            ->add('costRub', 'number')
            ->add('costUsd', 'number')
            ->add('gallery', 'sonata_type_model_list', array(
            ), array(
                'placeholder' => 'Галерея не выбрана'
            ))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('name')
            ->add('titleENG')
            ->add('description')
            ->add('descriptionENG')
            ->add('size')
            ->add('productionTime')
            ->add('id')
        ;
    }
}
