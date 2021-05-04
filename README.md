# tickup

## synopsis

A system to allow a user to create events, sell tickets and manage the guestlist through scanning QR codes on entry and departure. 

## stack
* PHP
* Laravel
* Vue Js
* Tailwind CSS
* laravel jetstream interia 

## quick set up

## 1
    composer install
## 2
    npm install
## 3
    npm run prod
## 4 (IF DB CREDENTIALS ARE POPULATED IN THE DOT ENV)
    php artisan migrate:fresh --seed 
## 5
    php artisan serve

## other commands

composer require laravel/jetstream

php artisan jetstream:install inertia

php artisan storage:link

## runs database migrations
php artisan migrate

## generate migrations from current db
php artisan migrate:generate -ignore="personal_access_tokens" 

## create controller
php artisan make:controller EventsController --resource

## create model
php artisan make:model Event

## create seeder
php artisan make:seeder UserSeeder

php artisan optimize:clear

## run seeders
php artisan db:seed

## run migration and seeders together
php artisan migrate:fresh --seed 
