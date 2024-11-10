#!/bin/bash
cd /var/www/laravel-app
chmod -R 755 node_modules
chmod -R 755 public


sudo apt update
sudo apt install nginx
sudo systemctl start codedeploy-agent
composer install --prefer-dist --no-interaction
npm install
npm run build