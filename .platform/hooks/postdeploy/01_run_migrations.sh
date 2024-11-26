#!/bin/bash
echo "Running migrations..."
cd /var/app/current
php artisan migrate --force
echo "Migrations completed."