<?php


namespace Feature\Routers\Handers;

class RequestMethodPostHandler
{
    public function getParams()
    {
        return $_POST;
    }

    public function getParam(string $name)
    {
        return $_POST[$name];
    }
}
