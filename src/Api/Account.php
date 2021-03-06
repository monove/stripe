<?php

/**
 * Part of the Stripe package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Stripe
 * @version    1.0.0
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011-2015, Cartalyst LLC
 * @link       http://cartalyst.com
 */

namespace Cartalyst\Stripe\Api;

class Account extends Api
{
    /**
     * Retrieves the details of the account, based on the
     * API key that was used to make the request.
     *
     * @return \GuzzleHttp\Message\ResponseInterface
     */
    public function details()
    {
        return $this->_get('account');
    }
    
    /**
     * Creates a new account.
     *
     * @param  array  $parameters
     * @return \GuzzleHttp\Message\ResponseInterface
     */
    public function create(array $parameters = [])
    {
    	return $this->_post('accounts', $parameters);
    }
    
    /**
     * Retrieves an existing account.
     *
     * @param  array  $parameters
     * @return \GuzzleHttp\Message\ResponseInterface
     */
    public function find(array $parameters = [])
    {
        return $this->_get("account", $parameters);
    }
    
    /**
     * Updates an existing account.
     *
     * @param  string  $accountId
     * @param  array  $parameters
     * @return \GuzzleHttp\Message\ResponseInterface
     */
    public function update($accountId, array $parameters = [])
    {
        return $this->_post("accounts/{$accountId}", $parameters);
    }
    
    /**
     * Lists all accounts.
     *
     * @param  array  $parameters
     * @return \GuzzleHttp\Message\ResponseInterface
     */
    public function all(array $parameters = [])
    {
        return $this->_get('accounts', $parameters);
    }
}
