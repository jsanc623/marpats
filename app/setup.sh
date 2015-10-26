#!/bin/bash

#composer update
php artisan vendor:publish
php artisan entrust:migration
php artisan migrate
