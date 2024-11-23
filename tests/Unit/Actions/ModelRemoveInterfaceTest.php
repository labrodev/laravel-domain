<?php

namespace Labrodev\Domain\Tests\Unit\Actions;

use Labrodev\Domain\Actions\ModelRemoveInterface;
use Labrodev\Domain\Tests\Mocks\Actions\ModelRemoveInterfaceMock;

test('ModelRemoveInterface exists', function () {
    expect(interface_exists(ModelRemoveInterface::class))->toBeTrue();
});

test('ModelRemoveInterface is implemented by model', function () {
    // Create an instance of MockModel
    $mockModel = new ModelRemoveInterfaceMock();

    // Ensure that MockModel is an instance of ModelCreateInterface
    expect($mockModel)->toBeInstanceOf(ModelRemoveInterface::class);
});
