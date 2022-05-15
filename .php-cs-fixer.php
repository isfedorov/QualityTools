<?php
declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude('vendor')
    ->append(['.php-cs-fixer.php']);


return (new PhpCsFixer\Config())
    ->setRules(['@PHP80Migration' => true])->setFinder($finder)
    ->setCacheFile(__DIR__ . '/.php_cs_fixer.cache');
