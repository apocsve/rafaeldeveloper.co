#!/bin/bash
set -e

while ! nc -z rafaeldeveloper-mysql 3306 ;
do
    echo "############# Waiting for rafaeldeveloper-mysql to start.";
    sleep 3;
done;

while ! nc -z rafaeldeveloper-redis 6379 ;
do
    echo "############# Waiting for rafaeldeveloper-redis to start.";
    sleep 3;
done;