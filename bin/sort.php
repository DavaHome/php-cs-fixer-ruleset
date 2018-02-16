<?php

$rules = include __DIR__ . '/../config/rules.config.php';
ksort($rules);

file_put_contents(__DIR__ . '/../config/rules2.config.php', implode(PHP_EOL, [
    '<?php',
    '',
    'return ' . var_export($rules, true) . ';',
]));

echo 'done', PHP_EOL;
