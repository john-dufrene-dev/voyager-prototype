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
php artisan voyager:install

# 1.5 Create a Voyager Admin User
php artisan voyager:admin $YOUR_EMAIL --create
```

__2. Install Voyager Frontend__

```bash

# 2.0 Run the Installer
composer dump-autoload && php artisan voyager-frontend:install

# 2.1 Build the front-end theme assets
npm run dev

```

### 'Got Cron'?

This is a just a reminder to setup the standard Laravel cron on your server. The Voyager Frontend package has a few scheduled tasks, so relies on the cron running.

```
* * * * * php /path-to-your-project/artisan schedule:run >> /dev/null 2>&1
```

__3. Troubleshooting__

```bash

# 1.0 Refresh all configurations
- php artisan tinker
- DB::statement("DROP DATABASE `YOUR_DATABASE`");
- DB::statement("CREATE DATABASE `YOUR_DATABASE`");

---