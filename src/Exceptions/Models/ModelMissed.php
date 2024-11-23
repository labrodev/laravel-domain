<?php

declare(strict_types=1);

namespace Labrodev\Domain\Exceptions\Models;

use Exception;
use Labrodev\Domain\Exceptions\Alertly;

class ModelMissed extends Exception implements Alertly
{
    /**
     * @param string $modelClass
     * @return self
     */
    public static function make(string $modelClass): self
    {
        return new self($modelClass);
    }

    /**
     * @return string
     */
    public function getAlertMessage(): string
    {
        return trans('labrodev::domain.exceptions.model_missed');
    }
}
