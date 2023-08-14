<?php

namespace App\Exceptions;


class RouteNotFoundException Extends \Exception
{
    protected $message = 'Route not found';
}