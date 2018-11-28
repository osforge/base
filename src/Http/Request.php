<?php

namespace Osforge\Http;

class Request
{
    public $response;
    public function __construct(Response $response)
    {
        $this->response = $response;
    }
}