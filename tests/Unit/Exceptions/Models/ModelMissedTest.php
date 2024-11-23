<?php

namespace Labrodev\Domain\Tests\Unit\Exceptions;

use Labrodev\Domain\Exceptions\Models\ModelMissed;

test('ModelMissed::make creates the exception with the correct message', function () {

    // Mock model class name
    $modelClass = 'Labrodev\Domain\Models\ExampleModel';

    // Create the exception using the `make` method
    $exception = ModelMissed::make($modelClass);

    // Expected message
    $expectedMessage = $modelClass;

    // Assertions
    expect($exception)->toBeInstanceOf(ModelMissed::class)
        ->and($exception->getMessage())->toBe($expectedMessage);
});

test('ModelMissed::getAlertMessage returns the correct alert message', function () {

    app()->setLocale('en');

    // Mock model class name
    $modelClass = 'Labrodev\Domain\Models\ExampleModel';

    // Create the exception using the `make` method
    $exception = ModelMissed::make($modelClass);

    // Message to be passed
    $message = trans('labrodev::domain.exceptions.model_missed');

    // Assertions
    expect($exception->getAlertMessage())->toBe($message);
});
