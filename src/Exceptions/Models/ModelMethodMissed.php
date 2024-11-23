<?php

declare(strict_types=1);

namespace Labrodev\Domain\Exceptions\Models;

use Exception;
use Labrodev\Domain\Exceptions\Alertly;
use Labrodev\Domain\Models\ModelInterface;

class ModelMethodMissed extends Exception implements Alertly
{
    /**
     * @param ModelInterface $model
     * @param string $method
     * @return self
     */
    public static function make(ModelInterface $model, string $method): self
    {
        $message = sprintf('There is missed method %s in class %s', $method, $model::class);
        return new self($message);
    }

    /**
     * @return string
     */
    public function getAlertMessage(): string
    {
        return trans('labrodev::domain.exceptions.model_method_missed');
    }
}
