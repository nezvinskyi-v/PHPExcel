<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\ValueObject\PhpVersion;
use Rector\CodeQuality\Rector\ClassMethod\OptionalParametersAfterRequiredRector;
use Rector\Php54\Rector\Array_\LongArrayToShortArrayRector;
use Rector\Php55\Rector\FuncCall\GetCalledClassToSelfClassRector;
use Rector\Php55\Rector\FuncCall\GetCalledClassToStaticClassRector;
use Rector\Php56\Rector\FuncCall\PowToExpRector;
use Rector\Php74\Rector\Closure\ClosureToArrowFunctionRector;
use Rector\Php71\Rector\List_\ListToArrayDestructRector;
use Rector\Php70\Rector\StmtsAwareInterface\IfIssetToCoalescingRector;
use Rector\Php53\Rector\FuncCall\DirNameFileConstantToDirConstantRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/Build',
        __DIR__ . '/Classes',
        __DIR__ . '/Documentation',
        __DIR__ . '/Examples',
        __DIR__ . '/unitTests',
    ])

    ->withSkip([
        PowToExpRector::class,
        OptionalParametersAfterRequiredRector::class,
        LongArrayToShortArrayRector::class,
        GetCalledClassToSelfClassRector::class,
        GetCalledClassToStaticClassRector::class,
        ClosureToArrowFunctionRector::class,
        ListToArrayDestructRector::class,
        IfIssetToCoalescingRector::class,
        DirNameFileConstantToDirConstantRector::class,
    ])

    ->withPhpVersion(PhpVersion::PHP_74)

    ->withSets([
        LevelSetList::UP_TO_PHP_84,
    ])

    ->withoutParallel()
;
