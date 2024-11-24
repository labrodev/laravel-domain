<?php

declare(strict_types=1);

namespace Labrodev\Domain\Policies;

use Illuminate\Contracts\Auth\Authenticatable;

interface GuardCrud
{
    public const CREATE = 'create';
    public const VIEW = 'view';
    public const UPDATE = 'update';
    public const REMOVE = 'remove';

    /**
     * @param Authenticatable $user
     * @return bool
     */
    public function create(Authenticatable $user): bool;

    /**
     * @param Authenticatable $user
     * @return bool
     */
    public function view(Authenticatable $user): bool;
}
