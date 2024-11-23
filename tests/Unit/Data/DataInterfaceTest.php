<?php

namespace Labrodev\Domain\Tests\Unit\Data;

use Labrodev\Domain\Data\DataInterface;
use Labrodev\Domain\Tests\Mocks\Data\DataInterfaceMock;

test('DataInterface exists', function () {
    expect(interface_exists(DataInterface::class))->toBeTrue();
});

test('DataInterface is implemented by class', function () {
    // Ensure MockData is an instance of DataInterface
    expect(new DataInterfaceMock())->toBeInstanceOf(DataInterface::class);
});

test('Data rules method returns the correct rules', function () {
    $rules = DataInterfaceMock::rules();

    // Expected rules
    $expectedRules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
    ];

    // Assert rules match
    expect($rules)->toBe($expectedRules);
});

test('Data attributes method returns the correct attributes', function () {
    $attributes = DataInterfaceMock::attributes();

    // Expected attributes
    $expectedAttributes = [
        'name' => 'Full Name',
        'email' => 'Email Address',
    ];

    // Assert attributes match
    expect($attributes)->toBe($expectedAttributes);
});
