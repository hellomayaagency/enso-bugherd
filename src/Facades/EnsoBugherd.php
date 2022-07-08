<?php

namespace Hellomayaagency\EnsoBugherd\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hellomayaagency\EnsoBugherd\EnsoBugherd
 */
class EnsoBugherd extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'enso-bugherd';
    }
}
