# SpoofMailPackage

SpoofMailPackage is intended to replace the e-mai recipient when working with an environment other than "production".
Compatible with Laravel 7 version.

#### Note:
Developed as part of a test task

## Installation

```composer require n1k-crimea/spoofmailpackage``` - install package

```php artisan spoofmailpackage:install``` - publish package config file, this command is similar to:
```
php artisan vendor:publish --provider="Nik\SpoofMailPackage\SpoofMailServiceProvider" --tag="config"
```