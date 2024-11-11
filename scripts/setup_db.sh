#!/bin/bash
cd /var/www/laravel-app

if [ ! -f database/database.sqlite ]; then
  touch database/database.sqlite
fi
php artisan migrate --force