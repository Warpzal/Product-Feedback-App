#!/bin/bash

echo "Starting Containers"
docker-compose up -d

if [ "$1" = "install" ] ; then
    echo "Installing Plugins"
    docker-compose exec wordpress composer install
fi