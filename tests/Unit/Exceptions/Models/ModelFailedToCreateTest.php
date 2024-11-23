<?php

namespace Labrodev\Domain\Tests\Unit\Exceptions;

use Labrodev\Domain\Exceptions\Models\ModelFailedToCreate;

test('ModelFailedToCreate::make creates the exception with the correct message', function () {

    // Mock model class name
    $modelClass = 'Labrodev\Domain\Models\ExampleModel';

    // Create the exception using the `make` method
    $exception = ModelFailedToCreate::make($modelClass);

    // Expected message
    $expectedMessage = sprintf(
        '%s: %s',
        'Failed to create an object for class',
        $modelClass
    );

    // Assertions
    expect($exception)->toBeInstanceOf(ModelFailedToCreate::class)
        ->and($exception->getMessage())->toBe($expectedMessage);
});

test('ModelFailedToCreate::getAlertMessage returns the correct alert message', function () {

    app()->setLocale('en');

    // Mock model class name
    $modelClass = 'Labrodev\Domain\Models\ExampleModel';

    // Create the exception using the `make` method
    $exception = ModelFailedToCreate::make($modelClass);

    // Message to be passed
    $message = trans('labrodev::domain.exceptions.model_failed_to_create');

    // Assertions
    expect($exception->getAlertMessage())->toBe($message);
});
