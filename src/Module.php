<?php
/**
 * Mogilabs (http://www.mogilabs.com/)
 *
 * @link      http://github.com/mogilabs/ml-liquidplanner for the canonical source repository
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Mogilabs\LiquidPlanner;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

/**
 * Class Module
 * @package Mogilabs\LiquidPlanner
 */
class Module implements
    AutoloaderProviderInterface,
    ConfigProviderInterface
{
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/../src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}