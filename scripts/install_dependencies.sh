#!/bin/bash
cd /var/www/laravel-app

sudo apt update
sudo apt install nginx
sudo systemctl start codedeploy-agent

composer install --prefer-dist --no-interaction

export PATH=$PATH:/usr/local/bin  # Adjust this path if npm is located elsewhere

npm install
npm run build