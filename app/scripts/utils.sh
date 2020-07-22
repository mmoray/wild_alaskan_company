#!/bin/bash

##################################################################
# Purpose: Hard enable xdebug in PHP container
# Arguments: none
##################################################################
php_xdebug_on()
{
    [ -f /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini.deactivated ] && mv /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini.deactivated /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
    kill -USR2 1
    printf "${C_MSG}PHP XDEBUG: Enabled${C_NORM}\n"
}
alias xdebug-on=php_xdebug_on

##################################################################
# Purpose: Hard disable xdebug in PHP container
# Arguments: none
##################################################################
php_xdebug_off()
{
    [ -f /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini ] && mv /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini.deactivated
    kill -USR2 1
    printf "${C_MSG}PHP XDEBUG: Disabled${C_NORM}\n"
}
alias xdebug-off=php_xdebug_off
