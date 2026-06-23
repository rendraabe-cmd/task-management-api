#!/bin/bash

# Install dependencies
composer install --no-dev --optimize-autoloader

# Generate APP_KEY jika belum ada
php artisan key:generate --force

# Clear & cache config
php artisan config:clear
php artisan config:cache

# Cache routes
php artisan route:cache

# Cache views
php artisan view:cache

# Run migrations
php artisan migrate --force

echo "Build completed successfully!"
