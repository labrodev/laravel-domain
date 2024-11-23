<?php

declare(strict_types=1);

namespace Labrodev\Domain\Exceptions\Models;

use Exception;
use Labrodev\Domain\Exceptions\Alertly;
use Labrodev\Domain\Models\ModelInterface;

class ModelRelationEmpty extends Exception implements Alertly
{
    /**
     * @param ModelInterface $model
     * @param string $relation
     * @return self
     */
    public static function make(ModelInterface $model, string $relation): self
    {
        $message = sprintf('%s: %s', $model::class, $relation);

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
