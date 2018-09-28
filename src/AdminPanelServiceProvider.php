<?php
namespace HamedSadeghi\AdminPanel;

use HamedSadeghi\AdminPanel\Http\Middleware\FlashMessage;
use Illuminate\Support\ServiceProvider;

class AdminPanelServiceProvider extends ServiceProvider{

    public function register(){
        $this->app->bind('AdminPanel', function(){
            return new AdminPanel();
        });

        $this->mergeConfigFrom(__DIR__ . '/config/main.php', 'adminpanel');
    }

    public function boot(){
        require __DIR__ . '/routes/web.php';

        App()->make('router')->aliasMiddleware('flash_message', FlashMessage::class);

        $this->loadViewsFrom(__DIR__ . '/resources/views', 'adminpanel');

        $this->publishes([
           __DIR__ . '/config/main.php' => config_path('adminpanel.php')
        ], 'AdminPanel-configs');

        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views/vendor/adminpanel')
        ], 'AdminPanel-views');

        $this->publishes([
            __DIR__ . '/resources/assets' => public_path('adminpanel')
        ], 'AdminPanel-assets');

        \Menu::make('sidebar', function($menu){
            if (config('adminpanel.make_dashboard'))
                $menu->add(config('adminpanel.dashboard_title'), ['route' => 'admin'])->attr('icon', 'tachometer-alt')->nickname('dashboard');
        });
    }
}