<?php

namespace Labrodev\Domain\Tests\Unit\Exceptions\Models;

use Labrodev\Domain\Exceptions\Models\ModelRelationEmpty;
use Labrodev\Domain\Models\ModelInterface;
use Labrodev\Domain\Tests\Mocks\Models\ModelInterfaceMock;

test('ModelRelationEmpty::make creates the exception with the correct message', function () {
    // Create a mock model
    $mockModel = new ModelInterfaceMock();

    // Define the missing relation
    $relation = 'relatedItems';

    // Create the exception using the `make` method
    $exception = ModelRelationEmpty::make($mockModel, $relation);

    // Expected message
    $expectedMessage = sprintf('%s: %s', get_class($mockModel), $relation);

    // Assertions
    expect($exception)->toBeInstanceOf(ModelRelationEmpty::class)
        ->and($exception->getMessage())->toBe($expectedMessage);
});

test('ModelRelationEmpty::getAlertMessage returns the correct alert message', function () {
    // Create a mock model
    $mockModel = new ModelInterfaceMock();

    // Define the missing relation
    $relation = 'relatedItems';

    // Create the exception using the `make` method
    $exception = ModelRelationEmpty::make($mockModel, $relation);

    // Message translated key (expected output from trans function)
    $expectedMessage = trans('labrodev::domain.exceptions.model_method_missed');

    // Assertions
    expect($exception->getAlertMessage())->toBe($expectedMessage);
});
