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
		echo "deb http://ppa.launchpad.net/ondrej/php/ubuntu bionic main" > /etc/apt/sources.list.d/ondrej-php.list \
				&& apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 4F4EA0AAE5267A6C \
				&& apt-get update && apt-get install -y --no-install-recommends \
						php-pear \
						php-memcache \
						php-memcached \
						php-redis \
						php-imagick \
						php-apcu \
						php-apcu-bc \
						php-tidy \
						php7.3 \
						php7.3-dev \
						php7.3-cli \
						php7.3-curl \
						php7.3-json \
						php7.3-mbstring \
						php7.3-opcache \
						php7.3-readline \
						php7.3-xml \
						php7.3-zip \
						php7.3-fpm \
						php7.3-mysql \
						php7.3-bcmath \
						php7.3-bz2 \
						php7.3-dba \
						php7.3-enchant \
						php7.3-gd \
						php7.3-gmp \
						php7.3-interbase \
						php7.3-intl \
						php7.3-pspell \
						php7.3-recode \
						php7.3-soap \
						php7.3-sybase \
						php7.3-xmlrpc \
						php7.3-xsl \
						gcc \
						make \
						autoconf \
						libc-dev \
						pkg-config \
						libmcrypt-dev \
				&& printf "\n" | pecl install mcrypt-1.0.2 \
				&& printf "\n" | pecl install xdebug \
				&& echo "extension=/usr/lib/php/20180731/mcrypt.so" > /etc/php/7.3/fpm/conf.d/mcrypt.ini \
				&& echo "extension=/usr/lib/php/20180731/mcrypt.so" > /etc/php/7.3/cli/conf.d/mcrypt.ini \
				&& info "Installing Composer..." 1 \
				&& mkdir /composer-setup \
				&& wget https://getcomposer.org/installer -P /composer-setup \
				&& php /composer-setup/installer --install-dir=/usr/bin \
				&& mv /usr/bin/composer{.phar,} \
				&& composer global require hirak/prestissimo \
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