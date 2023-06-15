<?php
namespace app\core;

use app\support\RequestType;

class RoutersFilter
{
    private string $uri;
    private string $method;
    private string $routesRegistered;

    public function __construct()
    {
        $this->uri = Uri::get();
        $this->method = RequestType::get();
        $this->routesRegistered = RequestType::get();
    }
    public function simpleRouter()
    {
    } 

    public function dynamicRouter()
    {
    }
}