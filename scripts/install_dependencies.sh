#!/bin/bash
cd /var/www/laravel-app

sudo apt update
sudo apt install nginx
sudo systemctl start codedeploy-agent