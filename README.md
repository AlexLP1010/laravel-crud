# Simple CRUD

Simple CRUD application (a software that creates, reads, updates and deletes data from one or more databases) written in PHP programming language using [Laravel](https://laravel.com/).

# Installation

Requeriments: 
- PHP 8.2
- Composer 2.6.5
- MySQL

Create a new empty database in your database server.

Copy this repository and run `composer install` in the project root folder.

Create a copy of file `.env.example` and rename it to `.env`. Then replace value of the following environment variables:
- DB_HOST
- DB_PORT
- DB_DATABASE
- DB_USERNAME
- DB_PASSWORD

~~~ conf
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1 # Replace value with your database host
DB_PORT=3306 # Replace value with your database port
DB_DATABASE=simple-crud # Replace value with your database name
DB_USERNAME=root # Replace value with your database username
DB_PASSWORD=secred # Replace value with your database password or do nothing if no use password

BROADCAST_DRIVER=log
~~~

Finally run `php artisan migrate` and then run `php artisan serve`.