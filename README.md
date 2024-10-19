# log-viewer-laravel | A Package to explore logs


[![Latest Version](https://img.shields.io/github/release/syedbacchu/log-viewer-laravel.svg?style=flat-square)](https://github.com/syedbacchu/log-viewer-laravel/releases)
[![Issues](https://img.shields.io/github/issues/syedbacchu/log-viewer-laravel.svg?style=flat-square)](https://github.com/syedbacchu/log-viewer-laravel)
[![Stars](https://img.shields.io/github/stars/syedbacchu/log-viewer-laravel.svg?style=social)](https://github.com/syedbacchu/log-viewer-laravel)
[![Stars](https://img.shields.io/github/forks/syedbacchu/log-viewer-laravel?style=flat-square)](https://github.com/syedbacchu/log-viewer-laravel)
[![Total Downloads](https://img.shields.io/packagist/dt/sdtech/log-viewer-laravel.svg?style=flat-square)](https://packagist.org/packages/sdtech/log-viewer-laravel)

- [About](#about)
- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Uses](#Uses)

## About

It simplifies the process of viewing Laravel logs by providing a user-friendly interface to browse, filter, and manage log entries directly from the application. It allows developers to monitor and troubleshoot issues in real-time without needing to access the file system or navigate complex log files
The current features are :

- View logs
- Download logs
- Clear logs
- Store logs

## Requirements

* [Laravel 5.8+](https://laravel.com/docs/installation)
* [PHP ^8.1](https://www.php.net/)

## Installation
1. From your projects root folder in terminal run:

```bash
composer require sdtech/log-viewer-laravel
```
2. In config/app.php, add it:
```php
'providers' => [
    // Other Service Providers...
    Sdtech\LogViewerLaravel\Providers\LogViewerLaravelServiceProvider::class,
],
```
3. Publish the packages views, config file, assets, and language files by running the following from your projects root folder:

```bash
php artisan vendor:publish --tag=logviewerlaravel
```

## configuration
1. Go to your config folder, then open "logviewerlaravel.php" file
2. here you must add that info or add the info to your .env file .

```php
'log_viewer_author' => env('LOGVIEWER_AUTHOR'),
'log_viewer_title' => env('LOGVIEWER_APP_TITLE'), // default LARAVEL
'max_file_size' => env('LOGVIEWER_MAX_FILE_SIZE'), // default 52428800
'pattern'       => env('LOGVIEWER_PATTERN', '*.log'), // no need to change it
'storage_path'  => env('LOGVIEWER_STORAGE_PATH', storage_path('logs')) // no need to change it
```

## Uses
3. We provide a sample code of functionality that will help you to integrate easily. Add a route in your web routes file:

```php

Route::get('log', [Sdtech\LogViewerLaravel\Controllers\LogViewerLaravelController::class, 'index']);
```
Go to http://your_url/log or some other route

