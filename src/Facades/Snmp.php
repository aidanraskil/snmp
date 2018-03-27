<?php

namespace Aidanraskil\Facades;

use Illuminate\Support\Facades\Facade;

class Snmp extends Facade
{
    protected static function getFacadeAccessor() 
    { 
    	return 'snmp'; 
    }
}