<?php

namespace Labrodev\Domain\Tests\Unit\Actions;

use Labrodev\Domain\Tests\Mocks\Actions\ModelCreateInterfaceMock;
use Labrodev\Domain\Actions\ModelCreateInterface;

test('ModelCreateInterface exists', function () {
    expect(interface_exists(ModelCreateInterface::class))->toBeTrue();
});

test('ModelCreateInterface is implemented by model', function () {
    // Create an instance of MockModel
    $mockModel = new ModelCreateInterfaceMock();

    // Ensure that MockModel is an instance of ModelCreateInterface
    expect($mockModel)->toBeInstanceOf(ModelCreateInterface::class);
});
