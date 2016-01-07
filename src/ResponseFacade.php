<?php

namespace JeyKeu\Response;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JeyKeu\Response\Response
 */
class ResponseFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ajaxResponse';
    }
}
