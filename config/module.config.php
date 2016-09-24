<?php
/**
 * Mogilabs (http://www.mogilabs.com/)
 *
 * @link      http://github.com/mogilabs/ml-liquidplanner for the canonical source repository
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Mogilabs\LiquidPlanner;

return array(
    'liquidplanner' => array(
        'baseUrl' => 'https://app.liquidplanner.com/api/',
        //'workspaceId' => '__LIQUID_PLANNER_WORKSPACE_ID__',
        //'username' => '__LIQUID_PLANNER_LOGIN_EMAIL__',
        //'password' => '__LIQUID_PLANNER_LOGIN_PASSWORD__',
    ),
    'service_manager' => array(
        'factories' => array(
            'Mogilabs\LiquidPlanner\Provider\ProviderInterface' => Factory\ProviderFactory::class
        ),
    ),
);
