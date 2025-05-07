<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\ValueObject\PhpVersion;
use Rector\CodeQuality\Rector\ClassMethod\OptionalParametersAfterRequiredRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/Build',
        __DIR__ . '/Classes',
        __DIR__ . '/Documentation',
        __DIR__ . '/Examples',
        __DIR__ . '/unitTests',
    ])

    ->withSkip([
        OptionalParametersAfterRequiredRector::class,
    ])

    ->withPhpVersion(PhpVersion::PHP_52)

    ->withSets([
        LevelSetList::UP_TO_PHP_74,
        LevelSetList::UP_TO_PHP_84,
    ])

    ->withoutParallel()
;
