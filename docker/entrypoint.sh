#Iniciar nginx
nginx -g "daemon off;"

#!/bin/bash

#Iniciar PHP-FPM en background
php-fpm &
#Esperar un poco
sleep 3

#Generar key si no existe
php artisan key:generate --force

#Migracion
php artisan migrate --force

#LIMPIAR ANTES
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

# LO DE TU PROFE (SE QUEDA)
php artisan config:cache
php artisan route:cache
php artisan view:cache

nginx -g "daemon off;"