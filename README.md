# voyager-prototype

## Prerequisites

- PHP >= 7.1.3
    - PHP extension `sqlite3` (required for `teamtnt/tntsearch`)
- Node & NPM
- Composer
- [Laravel Requirements](https://laravel.com/docs/installation)

---

## Installation

__1. Install Laravel + Prototype__

```bash
# 1.0 Install Laravel
git clone https://github.com/john-dufrene-dev/voyager-prototype.git

# 1.1 Edit your .env
cp .env.example .env

# 1.2 Install packages DEV
composer install && npm install

# 1.3 Generate a Laravel key
php artisan key:generate

# 1.4 Run the prototype Installer
php artisan prototype:install --with-dummy

# 1.5 Publish the package’s config and assets
php artisan vendor:publish --tag=lfm_public

```

__2. Troubleshooting__

```bash

# 1.0 Refresh all configurations
- php artisan tinker
- DB::statement("DROP DATABASE `YOUR_DATABASE`");
- DB::statement("CREATE DATABASE `YOUR_DATABASE`");

---