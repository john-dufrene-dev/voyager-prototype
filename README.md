# voyager-prototype

## Prerequisites

- PHP >= 7.2
    - PHP extension `sqlite3` (required for `teamtnt/tntsearch`)
- MariaDB 10.3
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

```

__2. Troubleshooting__

```bash

# 1.0 Refresh all configurations
- php artisan tinker
- DB::statement("DROP DATABASE `YOUR_DATABASE`");
- DB::statement("CREATE DATABASE `YOUR_DATABASE`");

# 1.1 Error symfony/console
- Problem when update symfony/console to "4.3.5" => Commands will not be correctly executed, use exec() instead of new Process()

---