<?php
/**
 * @author     Evgeny Seleznev <webprogrammist@gmail.com>
 * @copyright  Copyright (c) 2014
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */

namespace Alkali\VK\Facade;

use Illuminate\Support\Facades\Facade;

class VK extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'vk'; }

}