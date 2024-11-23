<?php

declare(strict_types=1);

namespace Labrodev\Domain\Models;

interface ModelObservable
{
    /**
     * @return void
     */
    public static function registerObservers(): void;
}
