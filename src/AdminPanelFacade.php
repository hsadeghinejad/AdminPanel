<?php
namespace HamedSadeghi\AdminPanel;

use Illuminate\Support\Facades\Facade;

class AdminPanelFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'AdminPanel';
    }
}