[![Latest Stable Version](https://poser.pugx.org/hamed-sadeghinejad/admin-panel/v/stable)](https://packagist.org/packages/hamed-sadeghinejad/admin-panel)
[![Total Downloads](https://poser.pugx.org/hamed-sadeghinejad/admin-panel/downloads)](https://packagist.org/packages/hamed-sadeghinejad/admin-panel)
[![Latest Unstable Version](https://poser.pugx.org/hamed-sadeghinejad/admin-panel/v/unstable)](https://packagist.org/packages/hamed-sadeghinejad/admin-panel)
[![License](https://poser.pugx.org/hamed-sadeghinejad/admin-panel/license)](https://packagist.org/packages/hamed-sadeghinejad/admin-panel)
# AdminPanel
This is an admin panel for laravel packages.

# Installation guide
1. Copy this line to `config/app.php` in `providers` variable:
```php
HamedSadeghi\AdminPanel\AdminPanelServiceProvider::class
```

2. Activate simple authenticate package of laravel
```
php artisan make:auth
php artisan migrate
```

3. Change `$redirectTo` attribute of `LoginController`, `RegisterController`, `ResetPasswordController` and `VerificationController` to `/admin`

4. Publish public assets
```
php artisan vendor:publish --tag=AdminPanel-assets
```

# Menu management
AdminPanel using [lavary/laravel-menu](https://github.com/lavary/laravel-menu) for menu management.

## Sidebar menu
To adding menu in sidebar of panel you must add your menu in `sidebar` section, ex:

```php
        \Menu::make('sidebar', function($menu){
            $menu->add('Articles management', '#')
                ->attr('icon', 'newspaper')
                ->nickname('articles');
            $menu->articles->add('Add new', ['route' => 'add-new']);
            $menu->articles->add('List', ['route' => 'list']);
        });
```
