<?php

namespace Osforge\Http;
use Osforge\View\View;

class Response
{
    public $return;

    public function __construct() {}

    public function send() {
        View::process( $this->return );
    }
}