<?php
/**
 * Mogilabs (http://www.mogilabs.com/)
 *
 * @link      http://github.com/mogilabs/ml-liquidplanner for the canonical source repository
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Mogilabs\LiquidPlanner\Factory;

use Mogilabs\LiquidPlanner\Provider\Provider;
use Zend\Config\Config;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ProviderFactory implements FactoryInterface
{
    /**
     * Get the liquid planner provider
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return Provider
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('Config');
        $lpConfig = new Config($config['liquidplanner']);
        $provider = new Provider($lpConfig);
        return $provider;
    }
}