<?php

namespace codicastudio\Impersonate;

use Illuminate\Support\Facades\Facade;
use codicastudio\Impersonate\Services\ImpersonateManager;

class Impersonate extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ImpersonateManager::class;
    }
}
