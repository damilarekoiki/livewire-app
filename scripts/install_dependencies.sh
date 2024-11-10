#!/bin/bash
sudo apt update
sudo apt install nginx
sudo systemctl start codedeploy-agent
# composer install --prefer-dist --no-interaction
nvm use 22
npm install
# npm run build