# Laravel Mini CRM

The project is Mini CRM built with Laravel.

## Included
* Auth System.
* Users Seeders.
* CRUD functionality (Create / Read / Update / Delete) for Companies and Employees.
* Companies DB table consists of these fields: Name (required), email, logo (minimum 100×100), website.
* Employees DB table consists of these fields: First name (required), last name (required), Company (foreign key to Companies), email, phone.
* Companies logos are stored in `storage/app/public` folder and are accessible from public.
* Basic Laravel resource controllers with default methods – index, create, store etc.
* Laravel’s validation function, using Request classes.
* Laravel’s pagination for showing Companies/Employees list, 10 entries per page.
* Default Bootstrap-based design theme, but removed ability to register.
* Services.
* Repositories
* Abstract Classes.

## Installation

* Make sure you have `composer` installed in your machine.
* Clone the repo: `git clone https://github.com/gentritabazi01/Laravel-Mini-CRM.git`.
* Navigate to {PROJECT-PATH} where {PROJECT-PATH} is the path where you cloned project.
* Run ``copy .env.example .env`` and after file `.env` is copied you need to set database credentials into `.env` file.
* Run ``composer install``.
* Run ``php artisan key:generate``.
* Run ``php artisan storage:link``.
* Run ``php artisan migrate --seed``.
* Run ``php artisan serve``.

## Login

You can login with:
- Email: `admin@admin.com` or with Username `admin`.
- Password : `password`.
