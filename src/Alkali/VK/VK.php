<?php
/**
 * @author     Evgeny Seleznev <webprogrammist@gmail.com>
 * @copyright  Copyright (c) 2014
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */

namespace Alkali\VK;

use Illuminate\Support\ServiceProvider;

use \Config;
use \URL;

use \OAuth\ServiceFactory;
use \OAuth\Common\Consumer\Credentials;

class VK
{
    /**
     * Client ID from config
     * @var string
     */
    private $_client_id;

    /**
     * Client secret from config
     * @var string
     */
    private $_client_secret;


    /**
     * Detect config and set data from it
     */
    public function setConfig()
    {
        if (Config::get('vk') != null)
        {
            $this->_client_id = Config::get("vk.client_id");
            $this->_client_secret = Config::get("vk.client_secret");
        }
    }

    /**
     * Return VK Api object
     * @param $token Access Token
     * @return \VK\VK
     */
    public function init($token)
    {
        $this->setConfig();
        return new \VK\VK($this->_client_id, $this->_client_secret, $token);
    }

}
