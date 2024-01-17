<?php

namespace Jigsaw\Boilerplate;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jigsaw\Boilerplate\Skeleton\SkeletonClass
 */
class BoilerplateFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'boilerplate';
    }
}
