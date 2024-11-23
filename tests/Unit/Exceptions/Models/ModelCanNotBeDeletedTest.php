<?php

namespace Labrodev\Domain\Tests\Unit\Exceptions\Models;

use Labrodev\Domain\Exceptions\Models\ModelCanNotBeDeleted;
use Labrodev\Domain\Models\ModelInterface;
use Labrodev\Domain\Tests\Mocks\Models\ModelInterfaceMock;

test('ModelCanNotBeDeleted::make creates the exception with the correct message', function () {

    $mockModel = new ModelInterfaceMock();

    // Message to be passed
    $message = 'The model cannot be deleted';

    // Create the exception using the `make` method
    $exception = ModelCanNotBeDeleted::make($mockModel, $message);

    // Expected message
    $expectedMessage = sprintf('%s. %s', $message, get_class($mockModel));

    // Assertions
    expect($exception)->toBeInstanceOf(ModelCanNotBeDeleted::class)
        ->and($exception->getMessage())->toBe($expectedMessage);
});

test('ModelCanNotBeDeleted::getAlertMessage returns the correct alert message', function () {

    app()->setLocale('en');

    $mockModel = new ModelInterfaceMock();

    // Message to be passed
    $message = trans('labrodev::domain.exceptions.model_cannot_be_deleted');

    // Create the exception using the `make` method
    $exception = ModelCanNotBeDeleted::make($mockModel, $message);

    // Assertions
    expect($exception->getAlertMessage())->toBe($message);
});
