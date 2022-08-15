<?php

use QualityTools\Functions\Rules\MyFirstRector;
use Rector\Config\RectorConfig;
use Rector\Core\ValueObject\PhpVersion;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([__DIR__ . '/src', __DIR__ . '/tests']);
    $rectorConfig->phpVersion(PhpVersion::PHP_82);
    $rectorConfig->sets([LevelSetList::UP_TO_PHP_82, SetList::PHP_82, SetList::PHP_81]);
    $rectorConfig->rule(MyFirstRector::class);
};
