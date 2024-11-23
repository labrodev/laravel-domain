<?php

declare(strict_types=1);

namespace Labrodev\Domain\Data;

interface DataInterface
{
    /**
     * @return array<string,mixed>
     */
    public static function rules(): array;

    /**
     * @return array<string,string>
     */
    public static function attributes(): array;
}
