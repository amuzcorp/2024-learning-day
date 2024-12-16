<?php

namespace App\Services;
use Illuminate\Support\Facades\Facade;

/**
 * @method static setMessage(string $message): void
 * @method static getMessage(): string
 */
class Learn extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'learn';
    }
}
