<?php

namespace Osforge\Contracts;

interface Kernel
{
    
    public function handle($input, $output = null);
    /**
     * Bootstrap the application for HTTP requests.
     *
     * @return void
     */
    public function bootstrap();

    /**
     * Get the application instance.
     *
     * @return Osforge\Application
     */
    public function getApplication();
}
