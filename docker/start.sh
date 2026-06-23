#!/bin/bash

# Generate APP_KEY if not exists
if [ -z "$APP_KEY" ]; then
    php artisan key:generate --force
fi

# Cache config & routes for production
php artisan config:cache
php artisan route:cache

# Run migrations
php artisan migrate --force

# Set permissions
chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Update nginx to use Render's PORT
sed -i "s/listen 80 default_server;/listen ${PORT:-80} default_server;/g" /etc/nginx/sites-available/default
sed -i "s/listen \[::\]:80 default_server;/listen [::]:${PORT:-80} default_server;/g" /etc/nginx/sites-available/default

# Start supervisor (nginx + php-fpm)
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
