#!/bin/bash
cd /var/www/laravel-app

if [ ! -f database/database.sqlite ]; then
  touch database/database.sqlite
fi

sudo chmod 664 database/database.sqlite
sudo chmod 775 database/database.sqlite
sudo chown www-data:www-data database/database.sqlite

sudo chmod -R 775 /var/www/laravel-app/storage /var/www/laravel-app/bootstrap/cache
sudo chown -R www-data:www-data /var/www/laravel-app/storage /var/www/laravel-app/bootstrap/cache

php artisan cache:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache



php artisan migrate --force