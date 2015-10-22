<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),

            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
            new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new FOS\RestBundle\FOSRestBundle(),
            new Sonata\EasyExtendsBundle\SonataEasyExtendsBundle(),
            new Liip\ImagineBundle\LiipImagineBundle(),
            new Gregwar\CaptchaBundle\GregwarCaptchaBundle(),
            new Ant\AdminBundle\AntAdminBundle(),
            new Ant\WebBundle\AntWebBundle(),
            new Ant\UserBundle\AntUserBundle(),
            new Ant\MediaBundle\AntMediaBundle(),
            new Web\Bundle\WebBundle(),
            new Web\MediaBundle\WebMediaBundle(),
            new Web\StockBundle\WebStockBundle(),
            new Sylius\Bundle\ResourceBundle\SyliusResourceBundle(),
            new Sylius\Bundle\MoneyBundle\SyliusMoneyBundle(),
            new Sylius\Bundle\OrderBundle\SyliusOrderBundle(),
            new Sylius\Bundle\CartBundle\SyliusCartBundle(),
//            new Sylius\Bundle\AddressingBundle\SyliusAddressingBundle(),
//            new Sylius\Bundle\ProductBundle\SyliusProductBundle(),
//            new Sylius\Bundle\AttributeBundle\SyliusAttributeBundle(),
//            new Sylius\Bundle\VariationBundle\SyliusVariationBundle(),
//            new Sylius\Bundle\TranslationBundle\SyliusTranslationBundle(),
//            new Sylius\Bundle\ArchetypeBundle\SyliusArchetypeBundle(),
            new Sylius\Bundle\InventoryBundle\SyliusInventoryBundle(),
            new Sylius\Bundle\OmnipayBundle\SyliusOmnipayBundle(),
            new JMS\SerializerBundle\JMSSerializerBundle($this),

            new WhiteOctober\PagerfantaBundle\WhiteOctoberPagerfantaBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),

            new Sonata\BlockBundle\SonataBlockBundle(),
            new Sonata\AdminBundle\SonataAdminBundle(),
            new Sonata\CoreBundle\SonataCoreBundle(),
            new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
            new Sonata\jQueryBundle\SonatajQueryBundle(),
            new Sonata\MediaBundle\SonataMediaBundle(),

        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
