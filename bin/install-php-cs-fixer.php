<?php

$url = 'http://cs.sensiolabs.org/download/php-cs-fixer-v2.phar';

$size = file_put_contents(
    'php-cs-fixer.phar',
    file_get_contents($url)
);
echo 'Downloaded ', round($size / 1024, 2), ' kB', PHP_EOL;
