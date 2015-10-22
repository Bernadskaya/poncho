<?php

namespace Web\StockBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class AddressAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('secondName')
            ->add('countryId')
            ->add('city')
            ->add('addressType')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('firstName')
            ->add('secondName')
            ->add('email')
            ->add('countryId')
            ->add('city')
            ->add('addressFL')
            ->add('addressSL')
            ->add('phone')
            ->add('mobilePhone')
            ->add('addressType')
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
            ->add('firstName')
            ->add('secondName')
            ->add('email')
            ->add('countryId', 'sonata_type_model_list', array())
            ->add('city')
            ->add('addressFL')
            ->add('addressSL')
            ->add('phone')
            ->add('mobilePhone')
            ->add('addressType','choice', array('choices' => array(
        'Bill' => 'Для выставления счета',
        'Dispature' => 'Для доставки',
    )))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('firstName')
            ->add('secondName')
            ->add('email')
            ->add('countryId')
            ->add('city')
            ->add('addressFL')
            ->add('addressSL')
            ->add('phone')
            ->add('mobilePhone')
            ->add('addressType')
            ->add('id')
        ;
    }
}
