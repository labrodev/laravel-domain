<?php

namespace Labrodev\Domain;

use Illuminate\Support\ServiceProvider;

class DomainServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot(): void
    {
        $this->loadTranslationsFrom(__DIR__ . '/../lang', 'labrodev');
    }
}
