# WordPress Async/Defer Scripts

A Composer library for asynchronously loading or deferring scripts in WordPress.

## Requirements

- PHP 5.3+
- WordPress 4.2+

## Installation

Add the module to your code base via Composer

```
composer require wpscholar/wp-async-defer-scripts
```

Be sure to require the Composer autoloader in your project

```php
<?php

require __DIR__ . '/vendor/autoload.php';
```

## Usage

How to asynchronously load a script:
```php
<?php

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_script( 'recaptcha', 'https://www.google.com/recaptcha/api.js' );
	wp_scripts()->add_data( 'recaptcha', 'async', true );
} );
```

How to defer loading of a script:
```php
<?php

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_script( 'recaptcha', 'https://www.google.com/recaptcha/api.js' );
	wp_scripts()->add_data( 'recaptcha', 'defer', true );
} );
```

## Initialization

In most cases, you can simply follow the installation instructions and things will just work. However, if you are including this library outside of a WordPress plugin or theme, you may have to manually initialize the class:

```php
<?php

wpscholar\WordPress\AsyncDeferScripts::initialize();
```
