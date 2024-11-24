<?php

namespace Labrodev\Domain\Tests\Unit\Policies;

use Illuminate\Contracts\Auth\Authenticatable;
use Labrodev\Domain\Policies\GuardCrud;

test('GuardCrud interface exists', function () {
    // Assert that the Alertly interface exists
    expect(interface_exists(GuardCrud::class))->toBeTrue();
});
test('A class implements GuardCrud and fulfills the contract', function () {
    // Create a mock Authenticatable user
    $userMock = mock(Authenticatable::class);

    // Create a mock class implementing the GuardCrud interface
    $mock = new class implements GuardCrud {
        public function create(Authenticatable $user): bool
        {
            return true;
        }

        public function view(Authenticatable $user): bool
        {
            return true;
        }
    };

    expect($mock)
        ->toBeInstanceOf(GuardCrud::class)
        ->and($mock->create($userMock))->toBeTrue()
        ->and($mock->view($userMock))->toBeTrue();
});
