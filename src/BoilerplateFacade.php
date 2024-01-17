<?php
declare(strict_types=1);

namespace Jigsaw\Boilerplate;

use Illuminate\Support\Facades\Facade;

/**
 * Class BoilerplateFacade
 */
class BoilerplateFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'boilerplate';
    }
}
