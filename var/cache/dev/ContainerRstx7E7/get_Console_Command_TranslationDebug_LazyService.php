<?php

namespace ContainerRstx7E7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_TranslationDebug_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.translation_debug.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.console.command.translation_debug.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('debug:translation', [], 'Display translation messages information', false, #[\Closure(name: 'console.command.translation_debug', class: 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationDebugCommand')] fn (): \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand => ($container->privates['console.command.translation_debug'] ?? $container->load('getConsole_Command_TranslationDebugService')));
    }
}
