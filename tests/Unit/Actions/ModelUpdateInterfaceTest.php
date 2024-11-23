<?php

namespace Labrodev\Domain\Tests\Unit\Actions;

use Labrodev\Domain\Actions\ModelUpdateInterface;
use Labrodev\Domain\Tests\Mocks\Actions\ModelUpdateInterfaceMock;

test('ModelUpdateInterface exists', function () {
    expect(interface_exists(ModelUpdateInterface::class))->toBeTrue();
});

test('ModelUpdateInterface is implemented by model', function () {
    // Create an instance of MockModel
    $mockModel = new ModelUpdateInterfaceMock();

    // Ensure that MockModel is an instance of ModelCreateInterface
    expect($mockModel)->toBeInstanceOf(ModelUpdateInterface::class);
});
