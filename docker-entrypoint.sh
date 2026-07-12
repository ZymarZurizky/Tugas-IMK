#!/bin/sh
set -e

# Wait for database to be ready (if using pgsql)
if [ "$DB_CONNECTION" = "pgsql" ]; then
    echo "Waiting for PostgreSQL database..."
    until nc -z -v -w30 "$DB_HOST" "$DB_PORT"; do
        echo "Waiting for database connection at $DB_HOST:$DB_PORT..."
        sleep 2
    done
    echo "Database is up and reachable!"
fi

# Copy .env if not exists
if [ ! -f .env ]; then
    echo "Copying .env.example to .env..."
    cp .env.example .env
fi

# Generate application key if not set
if ! grep -q "APP_KEY=base64:" .env || [ -z "$(grep APP_KEY .env | cut -d '=' -f2)" ]; then
    echo "Generating application key..."
    php artisan key:generate --force
fi

# Run migrations and seed data
echo "Running database migrations..."
php artisan migrate --force

echo "Seeding default data (Doctor and Admin)..."
php artisan db:seed --force

echo "Starting Laravel application..."
exec "$@"
