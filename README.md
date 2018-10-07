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
