#!/usr/bin/env bash

composer install
chmod -R 777 storage
php artisan key:generate
php artisan cache:clear
#php artisan migrate:refresh --seed
php-fpm
