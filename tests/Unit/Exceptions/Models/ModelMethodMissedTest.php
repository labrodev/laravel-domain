<?php

namespace Labrodev\Domain\Tests\Unit\Exceptions\Models;

use Labrodev\Domain\Exceptions\Models\ModelMethodMissed;
use Labrodev\Domain\Models\ModelInterface;
use Labrodev\Domain\Tests\Mocks\Models\ModelInterfaceMock;

test('ModelMethodMissed::make creates the exception with the correct message', function () {
    // Create a mock model
    $mockModel = new ModelInterfaceMock();

    // Define the missing method
    $method = 'exampleMethod';

    // Create the exception using the `make` method
    $exception = ModelMethodMissed::make($mockModel, $method);

    // Expected message
    $expectedMessage = sprintf('There is missed method %s in class %s', $method, get_class($mockModel));

    // Assertions
    expect($exception)->toBeInstanceOf(ModelMethodMissed::class)
        ->and($exception->getMessage())->toBe($expectedMessage);
});

test('ModelMethodMissed::getAlertMessage returns the correct alert message', function () {
    // Create a mock model
    $mockModel = new ModelInterfaceMock();

    // Define the missing method
    $method = 'exampleMethod';

    // Create the exception using the `make` method
    $exception = ModelMethodMissed::make($mockModel, $method);

    $expectedMessage = trans('labrodev::domain.exceptions.model_method_missed');

    // Assertions
    expect($exception->getAlertMessage())->toBe($expectedMessage);
});
