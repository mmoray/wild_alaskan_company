#!/bin/sh
set -e

. /usr/local/bin/my-utils.sh
if [ "${1#-}" != "$1" ]; then
	set -- php-fpm "$@"
fi

[ -z "$APP_ENV" ] && APP_ENV=production
echo "App Container Environment: ${APP_ENV}"

# Update this to set up the application (run migrations, composer, etc.)
if [ -f "/var/www/composer.lock" ]; then
	echo "Installing composer dependencies"
	composer install --ignore-platform-reqs
fi

exec docker-php-entrypoint "$@"