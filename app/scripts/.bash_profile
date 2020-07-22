#!usr/bin/env bash

. /usr/local/bin/my-utils.sh

env > /tmp/env
export $(cat /etc/environment | xargs) 2> /dev/null
export $(cat /tmp/env | xargs) 2> /dev/null

rm /tmp/env

export SSH_AUTH_SOCK=/var/ssh/socket
cd /var/www

alias exit='exit 0'
alias fd="find . -type d -name"
alias ff="find . -type f -name"
alias ll="ls -l"
alias ls="ls --color=tty"