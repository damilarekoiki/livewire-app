#!/bin/bash
# Example script to setup the database

if [ ! -f database/database.sqlite ]; then
  touch database/database.sqlite
fi
php artisan migrate --force