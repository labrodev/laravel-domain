<?php

declare(strict_types=1);

namespace Labrodev\Domain\Exceptions;

interface Alertly
{
    /**
     * @return string
     */
    public function getAlertMessage(): string;
}
