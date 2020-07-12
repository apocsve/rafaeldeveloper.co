# Base Image UBUNTU 18.04
FROM ubuntu:18.04

LABEL mantainer="Rafael <rafael@booug.com>"

# Working directory as root
USER root
WORKDIR "/root"

# No prompts please
ENV DEBIAN_FRONTEND=noninteractive

# Fixes some weird terminal issues such as broken clear / CTRL+L
ENV TERM=linux

# Perform Installations
COPY ./docker-runs.sh /root/docker-runs.sh
RUN chmod +x "/root/docker-runs.sh"
RUN /root/docker-runs.sh
RUN mkdir -p /var/www/scripts

# Copying neccessary files

## NGINX Conf
COPY ./nginx/app.conf /etc/nginx/conf.d/app.conf

## PHP Conf
COPY ./php/php-fpm.conf /etc/php/7.3/fpm/php-fpm.conf

## Supervisor
COPY ./supervisord/supervisord.conf /etc/supervisord.conf

## .env app
COPY ./.env_app /root/.env_app

## Docker scripts
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
COPY wait.sh /usr/local/bin/wait.sh

WORKDIR "/var/www/html"

ENTRYPOINT wait.sh && docker-entrypoint.sh