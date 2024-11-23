<?php

namespace Labrodev\Domain\Tests\Unit\Exceptions;

use Labrodev\Domain\Exceptions\Alertly;

test('Alertly interface exists', function () {
    // Assert that the Alertly interface exists
    expect(interface_exists(Alertly::class))->toBeTrue();
});

test('A class implements Alertly and fulfills the contract', function () {

    // Create a mock class implementing the Alertly interface
    $mock = new class implements Alertly {
        public function getAlertMessage(): string
        {
            return 'Mock alert message';
        }
    };

    expect($mock)->toBeInstanceOf(Alertly::class)
        ->and($mock->getAlertMessage())->toBe('Mock alert message');
});
