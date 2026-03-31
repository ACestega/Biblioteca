#!/bin/bash

php-fpm &
sleep 3

# Crear SQLite si no existe
mkdir -p database
touch database/database.sqlite

php artisan key:generate --force

# Migraciones
php artisan migrate --force

# Limpiar cache
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

# Cache 
php artisan config:cache
php artisan route:cache
php artisan view:cache

nginx -g "daemon off;"