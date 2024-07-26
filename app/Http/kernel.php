<?php

namespace App\Http\Kernel;

use Illuminate\Foundation\Http\Kernel;
use Illuminate\Routing\Redirector;

class Kernel extends Kernel
{
    /**
     * The application's route dispatcher.
     *
     * @var \Illuminate\Routing\Dispatcher
     */
    protected $router;

    /**
     * Create a new kernel instance.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @param  \Illuminate\Routing\Dispatcher  $router
     * @return void
     */
    public function __construct($app, $router)
    {
        parent::__construct($app, $router);

        $this->router = $router;
    }

    /**
     * Handle an incoming HTTP request and return a response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function handle($request)
    {
        if (! $request->isXmlHttpRequest() && ! $request->expectsJson()) {
            if (! Auth::check()) {
                return redirect('/login'); // Redirect to login if not authenticated
            }
        }

        $response = $this->router->dispatch($request);

        return $response;
    }

    // ... other methods ...
}