# voyager-prototype

## Prerequisites

- PHP >= 7.2
    - PHP extension `sqlite3` (required for `teamtnt/tntsearch`)
- Laravel 6
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
php artisan prototype:install --with-dummy # --production Only in production

# 1.5 If you are in Production
composer install --optimize-autoloader --no-dev # Only in production

```

__2. Troubleshooting__

```bash

# 1.0 Error symfony/console
- Problem when update symfony/console to "4.3.5" => Commands will not be correctly executed, use exec() instead of new Process() : "Need to change controller"

# 1.1 Optimization fail
- When active multilanguage can\'t use php artisan optimize because Closure : "Need to create Controller"

# 1.2 Error compatibility with Laravel 6.6
- Error when update to Laravel 6.6 with database list, waiting tcg update, use 1.3.x-dev for the moment
#fix next version, waiting for 1.3.1 tcg/voyager: 4586 https://github.com/the-control-group/voyager/commit/e4fe256e32971c6c9554dea93c65973174257f02

```

__3. TodoList__

```bash

- Put api_token in Headers when customer is authenticated and get customer info with Vue
- Finalize route.js to inject routes in js file

```

__4. Helpers__

```bash

# 1.0 Refresh all configurations
- php artisan tinker
- DB::statement("DROP DATABASE `YOUR_DATABASE`");
- DB::statement("CREATE DATABASE `YOUR_DATABASE`");

# 1.1 Update translation JS
- use php artisan vue-i18n:generate --format= "umd" to update translation JS 

# 1.2 Publish Telescope
- you need to use php artisan telescope:install again if .env value TELESCOPE_ENABLED is to false 

```

__5. Api__

```bash

# 1.0 Users authorizations
- jwt (access to normal api)

# 1.1 Get user token
- Get token access: /api/auth/token/login | params:['email', 'address'] | format: ['url-form', 'json']
- IN PROGRESS

# 1.2 Get api informations
- Get route of api: EX : /api/posts
- METHOD GET: /api/posts?token=your_user_token | params:['token'] | format: ['json']
- METHOD GET: /api/posts | headers: "Authorization: Bearer your_user_token" | format: ['json']

####################################################################################

# 2.0 Customers authorizations
- token

# 2.1 Get customers authorization
- METHOD GET: /api/customer/auth/token?email=your_email_customer&password=your_password_customer&scopes=customer_authorization
- METHOD POST: /api/customer:auth/token | params:['email', 'address', 'scopes'] | format: ['url-form', 'json']

# 2.1 Get customers informations
- METHOD GET: /api/customer/auth/token?email=your_email_customer&password=your_password_customer&scopes=customer_informations
- METHOD POST: /api/customer:auth/token | params:['email', 'address', 'scopes'] | format: ['url-form', 'json']

```
