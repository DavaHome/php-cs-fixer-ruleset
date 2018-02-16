#!/usr/bin/env bash

function download_composer {
    wget https://getcomposer.org/installer -O composer-setup.php
    php composer-setup.php
    rm -f composer-setup.php
}

if [[ -f 'composer.phar' ]]; then
    php composer.phar self-update || download_composer
else
    download_composer
fi
