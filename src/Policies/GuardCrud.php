<?php

declare(strict_types=1);

namespace Labrodev\Domain\Policies;

use Illuminate\Contracts\Auth\Authenticatable;

interface GuardCrud
{
    public const CREATE_METHOD = 'create';
    public const INDEX_METHOD = 'index';
    public const UPDATE_METHOD = 'update';
    public const REMOVE_METHOD = 'remove';

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
