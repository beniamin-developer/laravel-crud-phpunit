<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PostServiceProvider extends ServiceProvider
{
    //protected $defer = true;

    public function register()
    {
        $this->app->bind(
            "App\\Repository\\PostRepositoryInterface",
            "App\\Repository\\EloquentPostRepository"
        );

//        $this->app->bind(
//            "PostValidatorInterface",
//            "PostValidator"
//        );
    }

//    public function provides()
//    {
//        return [
//            "PostRepositoryInterface",
//            "PostValidatorInterface",
//        ];
//    }
}