#!/bin/bash
set -e

#workspace_path="/var/www/html"

main()
{
		info "Finally running supervisord." 1
		supervisord -c /etc/supervisord.conf
}


info()
{
		message="$1"
		blink=''
		[ -z "$2" ] || blink=';5'

		echo -e "\e[45;1${blink}m$message\e[0m"
}

# shellcheck disable=SC2048
# shellcheck disable=SC2086
main $*