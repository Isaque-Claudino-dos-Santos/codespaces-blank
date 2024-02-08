<?php

namespace Feature\Routers\Handers;

class RequestMethodGetHandler
{
    public function getParams()
    {
        return $_GET;
    }
    
    public function getParam(string $name)
    {
        return $_GET[$name];
    }
}
