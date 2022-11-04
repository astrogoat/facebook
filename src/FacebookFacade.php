<?php

namespace Astrogoat\Facebook;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\Facebook\Facebook
 */
class FacebookFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'facebook';
    }
}
