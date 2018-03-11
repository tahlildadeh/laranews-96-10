<?php

namespace Awesome;

class AwesomeFacade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return Awesome::class;
    }
}