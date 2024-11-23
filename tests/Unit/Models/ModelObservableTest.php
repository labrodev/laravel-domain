<?php

namespace Labrodev\Domain\Tests\Unit\Actions;

use Labrodev\Domain\Tests\Mocks\Models\ModelObservableMock;
use Labrodev\Domain\Models\ModelObservable;

test('ModelObservable interface exists', function () {
    expect(interface_exists(ModelObservable::class))->toBeTrue();
});

test('ModelObservable is implemented by model', function () {
    // Create an instance of MockModel
    $mockModel = new ModelObservableMock();

    // Ensure that MockModel is an instance of ModelInterface
    expect($mockModel)->toBeInstanceOf(ModelObservable::class);
});
