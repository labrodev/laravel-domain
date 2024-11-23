<?php

namespace Labrodev\Domain\Tests\Mocks\Data;

use Labrodev\Domain\Data\DataInterface;

class DataInterfaceMock implements DataInterface
{
    public static function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
        ];
    }

    public static function attributes(): array
    {
        return [
            'name' => 'Full Name',
            'email' => 'Email Address',
        ];
    }
}
