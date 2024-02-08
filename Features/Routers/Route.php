<?php

namespace Feature\Routers;

use Feature\Routers\Enums\RequestMethods;
use Feature\Routers\Handers\RequestMethodGetHandler;
use Feature\Routers\Handers\RequestMethodPostHandler;

class Route
{
    private readonly RequestMethodGetHandler $methodGetHandler;
    private readonly RequestMethodPostHandler $methodPostHandler;

    public function __construct(
        private string $uri,
        private string $method,
        private array $paramKeys = [],
    ) {
        $this->methodGetHandler = new RequestMethodGetHandler();
        $this->methodPostHandler = new RequestMethodPostHandler();
    }

    public function isMethod(RequestMethods | string $method): bool
    {
        return $_SERVER["REQUEST_METHOD"] === strtoupper($method);
    }

    public function getParams()
    {
        if ($this->isMethod(RequestMethods::GET)) {
            return $this->methodGetHandler->getParams();
        }

        return $this->methodPostHandler->getParams();
    }

    public function getParam(string $name)
    {
        if ($this->isMethod(RequestMethods::GET)) {
            return $this->methodGetHandler->getParam($name);
        }

        return $this->methodPostHandler->getParam($name);
    }
}
