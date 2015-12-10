<?php

namespace RC\PaiementCMCICBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class RCPaiementCMCICExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        $container->setParameter('rc_paiement_cmcic.client',    $config['client']);
        $container->setParameter('rc_paiement_cmcic.serveur',   $config['serveur']);
        $container->setParameter('rc_paiement_cmcic.urls',      $config['urls']);
        $container->setParameter('rc_paiement_cmcic.secret',    $config['secret']);
    }
}
