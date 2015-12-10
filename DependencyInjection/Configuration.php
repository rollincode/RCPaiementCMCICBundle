<?php

namespace RC\PaiementCMCICBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('rc_paiement_cmcic');

        $rootNode
            ->children()

                ->arrayNode('client')
                    ->children()
                        ->scalarNode('CODE_SOCIETE')->end()
                        ->scalarNode('TPE')->end()
                        ->scalarNode('LANGUE')->end()
                        ->scalarNode('DEVISE')->end()
                    ->end()
                ->end()

                ->arrayNode('serveur')
                    ->children()
                        ->scalarNode('SERVEUR_PROD')->end()
                        ->scalarNode('SERVEUR_PREPROD')->end()
                        ->scalarNode('VERSION')->end()
                    ->end()
                ->end()

                ->arrayNode('urls')
                    ->children()
                        ->scalarNode('URL_PAIEMENT')->end()
                    ->end()
                ->end()

                ->arrayNode('secret')
                    ->children()
                        ->scalarNode('CLE')->end()
                    ->end()
                ->end()

            ->end();

        return $treeBuilder;
    }
}
