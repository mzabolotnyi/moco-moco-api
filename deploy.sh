#!/bin/bash

# Clear var files
rm -rf var/cache/*
rm -rf var/logs/dev.log var/logs/prod.log var/logs/test.log
echo -e "Clearing var files was successfully done."

# Composer install
php /usr/bin/composer install
echo -e "Composer install done."

# Update DB
php bin/console doctrine:migration:migrate --no-interaction
echo -e "Database was updated successfully"