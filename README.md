Summernote editor extension for ezadev-admin
======

This is a `ezadev-admin` extension that integrates `Summernote` into the `ezadev-admin` form.

## Installation

```bash
composer require ezadev/summernote
```

Then
```bash
php artisan vendor:publish --tag=ezadev-summernote
```

## Configuration

In the `extensions` section of the `config/admin.php` file, add some configuration that belongs to this extension.
```php

    'extensions' => [

        'summernote' => [
        
            //Set to false if you want to disable this extension
            'enable' => true,
            
            // Editor configuration
            'config' => [
                
            ]
        ]
    ]

```
The configuration of the editor can be found in [Summernote Documentation](https://summernote.org/getting-started/), such as configuration language and height.
```php
    'config' => [
        'lang'   => 'en-EN',
        'height' => 500,
    ]
```

## Usage

Use it in the form:
```php
$form->summernote('content');
```

License
------------
Licensed under [The MIT License (MIT)](LICENSE).
