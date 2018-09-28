<?php
/**
 * AdminPanel
 * User: Hamed Sadeghinejad
 * Email: h.sadeghynejad@gmail.com
 * Date: 12/09/2018
 * Time: 02:47 PM
 */

namespace HamedSadeghi\AdminPanel\Http\Controllers;


use AdminPanel;

class AdminPanelController
{
    public function index(){
        return view('adminpanel::index', ['name' => 'test']);
    }
}