<?php

namespace Labrodev\Domain\Tests\Unit\Actions;

use Labrodev\Domain\Tests\Mocks\Models\ModelInterfaceMock;
use Labrodev\Domain\Models\ModelInterface;

test('Model interface exists', function () {
    expect(interface_exists(ModelInterface::class))->toBeTrue();
});

test('ModelInterface is implemented by model', function () {
    // Create an instance of MockModel
    $mockModel = new ModelInterfaceMock();

    // Ensure that MockModel is an instance of ModelInterface
    expect($mockModel)->toBeInstanceOf(ModelInterface::class);
});
