<?php

declare(strict_types=1);

namespace Labrodev\Domain\Exceptions\Models;

use Exception;
use Labrodev\Domain\Exceptions\Alertly;

class ModelFailedToCreate extends Exception implements Alertly
{
    /**
     * @param string $modelClass
     * @return self
     */
    public static function make(string $modelClass): self
    {
        $message = sprintf('%s: %s',
            'Failed to create an object for class',
            $modelClass
        );

        return new self($message);
    }

    /**
     * @return string
     */
    public function getAlertMessage(): string
    {
        return trans('labrodev::domain.exceptions.model_failed_to_create');
    }
}
