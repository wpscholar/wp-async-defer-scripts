# WordPress Async/Defer Scripts

A Composer library for asynchronously loading or deferring scripts in WordPress.

## Usage

### Step 1: Initialization

Initialize the module:
```php
<?php
wpscholar\WordPress\AsyncDeferScripts::initialize();
```

### Step 2: Implementation

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
