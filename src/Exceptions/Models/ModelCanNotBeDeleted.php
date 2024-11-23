<?php

declare(strict_types=1);

namespace Labrodev\Domain\Exceptions\Models;

use Exception;
use Labrodev\Domain\Exceptions\Alertly;
use Labrodev\Domain\Models\ModelInterface;

class ModelCanNotBeDeleted extends Exception implements Alertly
{
    /**
     * @param ModelInterface $model
     * @param string $message
     * @return self
     */
    public static function make(ModelInterface $model, string $message): self
    {
        $message = sprintf('%s. %s', $message, $model::class);

        return new self($message);
    }

    /**
     * @return string
     */
    public function getAlertMessage(): string
    {
        return trans('labrodev::domain.exceptions.model_cannot_be_deleted');
    }
}
