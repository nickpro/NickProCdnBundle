<?php

namespace Nickpro\CdnBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @author nikita prokurat <nickpro@tut.by>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('nickpro_cdn');

        $rootNode
            ->children()
                ->scalarNode('default_storage')
                    ->isRequired(true)
                ->end()
                ->arrayNode('schemas')
                    ->prototype('scalar')
                    ->end()
                ->end()
                ->arrayNode('storages')
                    ->prototype('array')
                    ->children()
                        ->scalarNode('schema')
                            ->isRequired(true)
                        ->end()
                        ->scalarNode('upload_path')
                            ->isRequired(true)
                        ->end()
                        ->scalarNode('upload_url')
                            ->isRequired(true)
                        ->end()
                    ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
