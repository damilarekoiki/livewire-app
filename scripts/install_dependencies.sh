#!/bin/bash
sudo apt update
sudo apt install nginx
sudo systemctl start codedeploy-agent
composer install --prefer-dist --no-interaction
npm install
npm run dev