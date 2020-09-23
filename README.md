# Fortify views for UIkit3

[![Maintainability](https://api.codeclimate.com/v1/badges/0d4e9ba3f10341847cb9/maintainability)](https://codeclimate.com/github/kawax/fortify-uikit/maintainability)

https://getuikit.com/

## Available views
- register
- login
- forgot-password
- reset-password

### Unavailable
- verify-email
- confirm-password
- two-factor-challenge

This is an experimental package so not all views are available.

## Requirements
- PHP >= 7.3
- Laravel >= 8.0
- Fortify >= 1.4

## Installation
Before install this package, you should install `laravel/fortify` (without Jetstream)
https://github.com/laravel/fortify

```
composer require laravel/fortify
php artisan vendor:publish --provider="Laravel\Fortify\FortifyServiceProvider"
php artisan migrate
```

Add `App\Providers\FortifyServiceProvider::class,` to `config/app.php`

```
composer require revolution/fortify-uikit
```

Add `Fortify::viewPrefix('fortify-uikit::');` to `FortifyServiceProvider@boot`

```php
    public function boot()
    {
        Fortify::viewPrefix('fortify-uikit::');

        //
    }
```

## Publish views

```
php artisan vendor:publish --tag=fortify-uikit
```

Publish to `/resources/views/vendor/fortify-uikit`

You can customize any files.

## Demo
https://github.com/kawax/fortify-project/tree/uikit

## LICENSE
MIT  
