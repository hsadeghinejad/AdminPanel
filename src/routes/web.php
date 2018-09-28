<?php

Route::group([
    'namespace' => 'HamedSadeghi\AdminPanel\Http\Controllers',
    'middleware' => ['web', 'auth', 'flash_message']
], function(){
    Route::name('admin')->get('/admin', 'AdminPanelController@index');
});