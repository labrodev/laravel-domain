<?php

declare(strict_types=1);

namespace Labrodev\Domain\Models;

interface ModelInterface
{
    /**
     * @return string
     */
    public function getRouteKeyName(): string;
}
