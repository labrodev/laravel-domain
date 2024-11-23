<?php

namespace Labrodev\Domain\Tests\Mocks\Models;

use Labrodev\Domain\Models\ModelObservable;

class ModelObservableMock implements ModelObservable
{
    public static function registerObservers(): void
    {
        // pretend something happens here
    }
}
