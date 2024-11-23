<?php

use Labrodev\Domain\Tests\TestCase;

uses(TestCase::class)->in(__DIR__);

afterEach(function () {
    Mockery::close();
});
