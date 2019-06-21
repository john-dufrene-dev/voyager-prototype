# voyager-prototype

## Prerequisites

- PHP >= 7.1.3
    - PHP extension `sqlite3` (required for `teamtnt/tntsearch`)
- Node & NPM
- Composer
- [Laravel Requirements](https://laravel.com/docs/installation)

---

## Installation

__1. Install Laravel + Voyager__
_(Replace the $VARs with your own values)_

```bash
# 1.0 Install Laravel
git clone https://github.com/john-dufrene-dev/voyager-prototype.git

# 1.1 Edit your .env
cp .env.example .env

# 1.2 Install packages DEV
composer install && npm install

# 1.3 Generate a Laravel key
php artisan key:generate

# 1.4 Run the Voyager Installer
php artisan prototyte:install (--with-dummy OPTIONNAL)

# 1.5 Create a Voyager Admin User
php artisan voyager:admin $YOUR_EMAIL --create

# 1.6 Run the Passport installer
php artisan passport:install
php artisan passport:keys

# OPTIONS :
# 1. Run the Telescope installer (Optionnal)
php artisan telescope:install
php artisan migrate

```

__2. Troubleshooting__

```bash

# 1.0 Refresh all configurations
- php artisan tinker
- DB::statement("DROP DATABASE `YOUR_DATABASE`");
- DB::statement("CREATE DATABASE `YOUR_DATABASE`");

---