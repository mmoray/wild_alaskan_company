#!/bin/sh
set -e

[ -z "$APP_ENV" ] && APP_ENV=production

echo "Web Server Container Environment: $APP_ENV"
exec "$@"