#!/bin/bash
set -e

# Generate app key jika belum ada
if [ "$APP_KEY" == "" ]; then
    php artisan key:generate --force
fi

# Jalankan migrasi database jika diinginkan
if [ "$RUN_MIGRATIONS" == "true" ]; then
    php artisan migrate --force
fi

# Optimize Laravel
php artisan optimize

# Jalankan command yang diberikan
exec "$@"