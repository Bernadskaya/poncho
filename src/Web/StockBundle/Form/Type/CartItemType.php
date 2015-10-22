<?php
/**
 * Created by JetBrains PhpStorm.
 * User: nataliabernadskaya
 * Date: 20.10.15
 * Time: 17:00
 * To change this template use File | Settings | File Templates.
 */
use Sylius\Bundle\CartBundle\Form\Type\CartItemType as BaseCartItemType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class CartItemType extends BaseCartItemType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $sizes)
    {
        parent::buildForm($builder, $sizes);

//        Необходимо разработать функцию выбора размера
//        if (isset($sizes['product']) && $sizes['product']->hasSizes()) {
//            $sizes = $options['product']->isVariantPickingModeChoice() ? 'sylius_assortment_variant_choice' : 'sylius_assortment_variant_match';
//            $builder->add('size', $type, array(
//                'product'  => $options['product']
//            ));
//        }
    }

}