<?php

namespace ContainerVv6Zcrj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AYnnHMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aYnnH_m' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aYnnH_m'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\AdminController::CommentaireDelete' => ['privates', '.service_locator.V71r_w4', 'get_ServiceLocator_V71rW4Service', true],
            'App\\Controller\\AdminController::ProduitAdd' => ['privates', '.service_locator.20FAk9a', 'get_ServiceLocator_20FAk9aService', true],
            'App\\Controller\\AdminController::ProduitDelete' => ['privates', '.service_locator.20FAk9a', 'get_ServiceLocator_20FAk9aService', true],
            'App\\Controller\\AdminController::adminCommentaires' => ['privates', '.service_locator.V71r_w4', 'get_ServiceLocator_V71rW4Service', true],
            'App\\Controller\\AdminController::adminProduits' => ['privates', '.service_locator.V71r_w4', 'get_ServiceLocator_V71rW4Service', true],
            'App\\Controller\\AdminController::produitEdit' => ['privates', '.service_locator.gvVOBZc', 'get_ServiceLocator_GvVOBZcService', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.V71r_w4', 'get_ServiceLocator_V71rW4Service', true],
            'App\\Controller\\HomeController::produitDetails' => ['privates', '.service_locator.V71r_w4', 'get_ServiceLocator_V71rW4Service', true],
            'App\\Controller\\HomeController::produits' => ['privates', '.service_locator.V71r_w4', 'get_ServiceLocator_V71rW4Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\AdminController:CommentaireDelete' => ['privates', '.service_locator.V71r_w4', 'get_ServiceLocator_V71rW4Service', true],
            'App\\Controller\\AdminController:ProduitAdd' => ['privates', '.service_locator.20FAk9a', 'get_ServiceLocator_20FAk9aService', true],
            'App\\Controller\\AdminController:ProduitDelete' => ['privates', '.service_locator.20FAk9a', 'get_ServiceLocator_20FAk9aService', true],
            'App\\Controller\\AdminController:adminCommentaires' => ['privates', '.service_locator.V71r_w4', 'get_ServiceLocator_V71rW4Service', true],
            'App\\Controller\\AdminController:adminProduits' => ['privates', '.service_locator.V71r_w4', 'get_ServiceLocator_V71rW4Service', true],
            'App\\Controller\\AdminController:produitEdit' => ['privates', '.service_locator.gvVOBZc', 'get_ServiceLocator_GvVOBZcService', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.V71r_w4', 'get_ServiceLocator_V71rW4Service', true],
            'App\\Controller\\HomeController:produitDetails' => ['privates', '.service_locator.V71r_w4', 'get_ServiceLocator_V71rW4Service', true],
            'App\\Controller\\HomeController:produits' => ['privates', '.service_locator.V71r_w4', 'get_ServiceLocator_V71rW4Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\AdminController::CommentaireDelete' => '?',
            'App\\Controller\\AdminController::ProduitAdd' => '?',
            'App\\Controller\\AdminController::ProduitDelete' => '?',
            'App\\Controller\\AdminController::adminCommentaires' => '?',
            'App\\Controller\\AdminController::adminProduits' => '?',
            'App\\Controller\\AdminController::produitEdit' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\HomeController::produitDetails' => '?',
            'App\\Controller\\HomeController::produits' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AdminController:CommentaireDelete' => '?',
            'App\\Controller\\AdminController:ProduitAdd' => '?',
            'App\\Controller\\AdminController:ProduitDelete' => '?',
            'App\\Controller\\AdminController:adminCommentaires' => '?',
            'App\\Controller\\AdminController:adminProduits' => '?',
            'App\\Controller\\AdminController:produitEdit' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\HomeController:produitDetails' => '?',
            'App\\Controller\\HomeController:produits' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
