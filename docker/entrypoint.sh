#!/bin/bash

echo "Iniciando aplicación..."

# Permisos (MUY IMPORTANTE)
chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Limpiar caches viejos
php artisan config:clear
php artisan cache:clear
php artisan view:clear

# Generar key si no existe (opcional pero seguro)
php artisan key:generate --force

# Ejecutar migraciones
php artisan migrate --force

# NO cachear config en Render al inicio (puede romper .env)
# php artisan config:cache

# Iniciar PHP-FPM en segundo plano
php-fpm &

# Esperar un poco
sleep 3

# Iniciar nginx en foreground
nginx -g "daemon off;"