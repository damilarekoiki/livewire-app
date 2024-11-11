#!/bin/bash
cd /var/www/laravel-app

sudo apt update
sudo apt install nginx
sudo systemctl start codedeploy-agent

composer install --prefer-dist --no-interaction

source ~/.nvm/nvm.sh

nvm use 22

npm install
npm run build