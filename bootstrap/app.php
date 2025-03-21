<?php

use App\Http\Middleware\CheckLoggedInClients;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin' => \App\Http\Middleware\AdminMiddleware::class,
            'checkLoginClient' => CheckLoggedInClients::class, // Đăng ký lại middleware
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
//@exceptions->useHandler(\App\Exceptions\Handler::class);
        
    })->create();
   // ->withExceptions(fn (Exceptions $exceptions) => $exceptions->useHandler(\App\Exceptions\Handler::class));

