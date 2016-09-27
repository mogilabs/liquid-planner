<?php
/**
 * Mogilabs (http://www.mogilabs.com/)
 *
 * @link      http://github.com/mogilabs/ml-liquidplanner for the canonical source repository
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Mogilabs\LiquidPlanner\Provider;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Zend\Config\Config;

/**
 * Class AbstractProvider
 * @package Mogilabs\LiquidPlanner\Provider
 */
abstract class AbstractProvider
{
    /**
     * @var string The Liquid Planner API Base URL
     */
    protected $baseUrl;

    /**
     * @var Config The liquid planner config
     */
    private $config;

    /**
     * @var Client The client to consume the Liquid Planner API
     */
    protected $client;

    /**
     * LiquidPlanner constructor.
     *
     * @param Config $config
     * @throws \Exception
     */
    public function __construct(Config $config)
    {
        if ($config->baseUrl === null) {
            throw new \Exception('Base Url is required to use the Liquid Planner API');
        }

        if ($config->username === null) {
            throw new \Exception('Username is required to use the Liquid Planner API');
        }

        if ($config->password === null) {
            throw new \Exception('Password is required to use the Liquid Planner API');
        }

        if ($config->workspaceId === null) {
            throw new \Exception('Workspace ID is required to use the Liquid Planner API');
        }

        $this->config = $config;
        $this->baseUrl = $config->baseUrl;
        $this->client = new Client([
            'base_uri' => $this->config->baseUrl,
            RequestOptions::AUTH => [
                $this->config->username,
                $this->config->password
            ]
        ]);
    }

    /**
     * Get the workspace id
     *
     * @return string
     */
    public function getWorkspaceId()
    {
        return $this->config->workspaceId;
    }
}