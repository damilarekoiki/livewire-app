#!/bin/bash
cd /var/www/laravel-app

if [ ! -f database/database.sqlite ]; then
  touch database/database.sqlite
fi

sudo chmod 664 database/database.sqlite
sudo chmod 775 database/database.sqlite
sudo chown www-data:www-data database/database.sqlite


php artisan migrate --force