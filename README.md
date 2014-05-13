# VK API wrapper for Laravel 4

laravel-vk is a simple laravel 4 service provider (wrapper) for [Vladkens/VK](https://github.com/Vladkens/vk)
which provides VK API support in PHP 5.3+

## Installation

Add laravel-vk to your composer.json file:

```
"require": {
  "vk/laravel-vk": "dev-master"
}
```

Use composer to install this package.

```
$ composer update
```

### Registering the Package

Register the service provider within the ```providers``` array found in ```app/config/app.php```:

```php
'providers' => array(
	// ...
	'Alkali\VK\VKServiceProvider'
)
```

Add an alias within the ```aliases``` array found in ```app/config/app.php```:


```php
'aliases' => array(
	// ...
	'VK' => 'Alkali\VK\Facade\VK',
)
```

## Configuration

Create configuration file manually in config directory ``app/config/vk.php`` and put there code from below.

```php
return array(
	'client_id'     => '',
	'client_secret' => '',
	'scope'         => array(),
);
```

## Usage

```php
$vk = VK::init($accessToken);
```