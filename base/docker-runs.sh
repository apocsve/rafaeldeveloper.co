#!/bin/bash
set -e

# shellcheck disable=SC2155
export GNUPGHOME="$(mktemp -d)"

main()
{
		info "Installing required applications" 1
		install_common_apps
		info "Installing PHP libraries" 1
		install_php_stuff
		info "Creating LOG directories" 1
		create_log_dirs

		info "Finalizing the deployment" 1
		apt-get clean
		apt-get purge -y --auto-remove xz-utils gnupg gcc make autoconf libc-dev pkg-config
		rm -rf "${GNUPGHOME}" /usr/local/bin/wp.gpg /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
}

install_common_apps()
{
		apt-get update && apt-get install -y --no-install-recommends \
				apt-transport-https \
				apt-utils \
				ca-certificates \
				cron \
				curl \
				dirmngr \
				git \
				gnupg \
				mysql-client \
				nginx \
				software-properties-common \
				supervisor \
				netcat \
				tar \
				unzip \
				vim \
				wget \
				xz-utils
}

install_php_stuff()
{
		apt-get update && apt-get install -y --no-install-recommends \
			php-pear \
			php-memcache \
			php-memcached \
			php-redis \
			php-imagick \
			php-apcu \
			php-tidy \
			php8.1 \
			php8.1-dev \
			php8.1-cli \
			php8.1-curl \
			php8.1-mbstring \
			php8.1-opcache \
			php8.1-readline \
			php8.1-xml \
			php8.1-zip \
			php8.1-fpm \
			php8.1-mysql \
			php8.1-bcmath \
			php8.1-bz2 \
			php8.1-dba \
			php8.1-enchant \
			php8.1-gd \
			php8.1-gmp \
			php8.1-interbase \
			php8.1-intl \
			php8.1-pspell \
			php8.1-soap \
			php8.1-sybase \
			php8.1-xmlrpc \
			php8.1-xsl \
			gcc \
			make \
			autoconf \
			libc-dev \
			pkg-config \
			libmcrypt-dev \
			&& printf "\n" | pecl install mcrypt-1.0.5 \
			&& printf "\n" | pecl install xdebug \
			&& echo "extension=/usr/lib/php/20210902/mcrypt.so" > /etc/php/8.1/fpm/conf.d/mcrypt.ini \
			&& echo "extension=/usr/lib/php/20210902/mcrypt.so" > /etc/php/8.1/cli/conf.d/mcrypt.ini \
			&& info "Installing Composer..." 1 \
			&& mkdir /composer-setup \
			&& wget https://getcomposer.org/installer -P /composer-setup \
			&& php /composer-setup/installer --install-dir=/usr/bin \
			&& mv /usr/bin/composer{.phar,} \
			&& composer clear-cache \
			&& rm -Rf /composer-setup ~/.composer
}

create_log_dirs()
{
		mkdir -p /var/log/supervisord/ \
				&& mkdir -p /var/log/php/ \
				&& chown www-data:www-data /var/log/php/ \
				&& mkdir -p /var/run/php
}

info()
{
		message="$1"
		blink=''
		[ -z "$2" ] || blink=';5'

		echo -e "\e[45;1${blink}m$message\e[0m"
}

# shellcheck disable=SC2086
# shellcheck disable=SC2048
main $*