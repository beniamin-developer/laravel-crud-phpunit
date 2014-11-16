<?php

namespace Providers;

use Illuminate\Support\ServiceProvider;

class AuthorizationServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->bind(
            "AuthorizationRepositoryInterface",
            "AuthorizationPostRepository"
        );

        $this->app->bind(
            "AuthorizationValidatorInterface",
            "AuthorizationValidator"
        );
    }

    public function provides()
    {
        return [
            "AuthorizationRepositoryInterface",
            "AuthorizationValidatorInterface",
        ];
    }
}