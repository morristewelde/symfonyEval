<?php

namespace ContainerVv6Zcrj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GvVOBZcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gvVOBZc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gvVOBZc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'csrfTokenManager' => ['privates', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'produit' => ['privates', '.errored..service_locator.gvVOBZc.App\\Entity\\Produit', NULL, 'Cannot autowire service ".service_locator.gvVOBZc": it needs an instance of "App\\Entity\\Produit" but this type has been excluded in "config/services.yaml".'],
        ], [
            'csrfTokenManager' => '?',
            'manager' => '?',
            'produit' => 'App\\Entity\\Produit',
        ]);
    }
}