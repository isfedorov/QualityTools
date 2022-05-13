<?php

declare(strict_types=1);

$config = require __DIR__.'/php-cs-fixer.php';

$config->setRules(array_merge($config->getRules(), [
    '@PHP80Migration' => true,
]));

return $config;