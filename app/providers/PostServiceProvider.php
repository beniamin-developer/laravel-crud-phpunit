<?php

namespace Providers;

use Illuminate\Support\ServiceProvider;

class PostServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->bind(
            "PostRepositoryInterface",
            "PostPostRepository"
        );

        $this->app->bind(
            "PostValidatorInterface",
            "PostValidator"
        );
    }

    public function provides()
    {
        return [
            "PostRepositoryInterface",
            "PostValidatorInterface",
        ];
    }
}