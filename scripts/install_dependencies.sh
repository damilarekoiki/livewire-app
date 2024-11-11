#!/bin/bash
cd /var/www/laravel-app

sudo chown -R $USER:$USER /var/www/laravel-app

sudo apt update
sudo apt install nginx
sudo systemctl start codedeploy-agent

# composer install --prefer-dist --no-interaction

# curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.40.0/install.sh | bash
# export NVM_DIR="$HOME/.nvm"
# [ -s "$NVM_DIR/nvm.sh" ] && \. "$NVM_DIR/nvm.sh"  # This loads nvm
# [ -s "$NVM_DIR/bash_completion" ] && \. "$NVM_DIR/bash_completion"  # This loads nvm bash_completion

# nvm install 22

# npm install

# chmod -R 755 /var/www/laravel-app
# chmod -R 755 /var/www/laravel-app/node_modules
# chmod -R 755 /var/www/laravel-app/public

# npm run build