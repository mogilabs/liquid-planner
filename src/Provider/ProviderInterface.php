<?php
/**
 * Mogilabs (http://www.mogilabs.com/)
 *
 * @link      http://github.com/mogilabs/ml-liquidplanner for the canonical source repository
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Mogilabs\LiquidPlanner\Provider;

use Zend\Config\Config;

interface ProviderInterface
{
    /**
     * LiquidPlanner constructor.
     *
     * @param Config $config
     * @throws \Exception
     */
    public function __construct(Config $config);

    /**
     * Get tasks for a workspace
     *
     * @param array $filters
     * @return mixed
     */
    public function getTasks($filters = []);

    /**
     * Get account details for authenticated API user
     *
     * @return array The api account holder details
     */
    public function getAccount();

    /**
     * Get members of workspace
     *
     * @return array The members of the workspace
     */
    public function getMembers();

    /**
     * Get LiquidPlanner API response for an input URL path. Workspace is assumed.
     * @param string $urlTail
     * @return array from JSON response
     */
    public function getApiResponse($urlTail);
}