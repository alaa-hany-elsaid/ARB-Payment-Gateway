<?php

namespace Alaa\Arb\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @mixin \Alaa\Arb\Arb
 *
 * @see \Alaa\Arb\Arb
 */
class Arb extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Alaa\Arb\Arb::class;
    }
}
