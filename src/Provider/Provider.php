<?php
/**
 * Mogilabs (http://www.mogilabs.com/)
 *
 * @link      http://github.com/mogilabs/ml-liquidplanner for the canonical source repository
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Mogilabs\LiquidPlanner\Provider;

use GuzzleHttp\RequestOptions;

/**
 * Class Provider
 * @package Mogilabs\LiquidPlanner\Provider
 */
class Provider extends AbstractProvider implements ProviderInterface
{
    /**
     * Get tasks for a workspace
     *
     * @param array $filters
     * @return mixed
     */
    public function getTasks($filters = [])
    {
        return json_decode($this->client->get("workspaces/{$this->getWorkspaceId()}/tasks", [
            RequestOptions::QUERY => [
                'filter' => $filters
            ]
        ])->getBody());
    }

    /**
     * Get account details for authenticated API user
     *
     * @return array The api account holder details
     */
    public function getAccount()
    {
        return json_decode($this->client->get('account')->getBody());
    }

    /**
     * Get members of workspace
     *
     * @return array The members of the workspace
     */
    public function getMembers()
    {
        return json_decode($this->client->get("workspaces/{$this->getWorkspaceId()}/members")->getBody());
    }

    /**
     * Get LiquidPlanner API response for an input URL path. Workspace is assumed.
     * @param string $urlTail
     * @return array from JSON response
     */
    public function getApiResponse($urlTail)
    {
        return json_decode($this->client->get("workspaces/{$this->getWorkspaceId()}/".$urlTail)->getBody());
    }
}