<?php

namespace Keepcloud\ClouDNS;

use Illuminate\Support\Facades\Facade;

class ClouDNSFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'cloudns';
    }
}
