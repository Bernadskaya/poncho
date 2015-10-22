<?php

namespace Web\StockBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ItemOrderAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('status')
            ->add('summaryCost')
            ->add('paymentDate')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('status')
            ->add('summaryCost')
            ->add('paymentDate')
            ->add('realShipmentCost')
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
            ->add('status','choice',array('choices' => array(
                'Payed' => 'Оплачен',
                'Not payed' => 'Не оплачен',
                'Dispatured' => 'Отправлен'
            )))
            ->add('summaryCost')
            ->add('items','sonata_type_model', array('expanded' => true, 'multiple' => true))
            ->add('paymentDate')
            ->add('realShipmentCost')
            ->add('shipmentVariantId','sonata_type_model', array())
            ->add('shippingAddressId','sonata_type_model', array())
            ->add('billingAddressId','sonata_type_model', array())
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('status')
            ->add('summaryCost')
            ->add('paymentDate')
            ->add('realShipmentCost')
            ->add('id')
        ;
    }
}
