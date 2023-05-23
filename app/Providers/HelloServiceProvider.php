<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

use Validator;
use App\Http\Validators\HelloValidator;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    //public function register(): void
    //{
        //
    //}

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //View::composer(
        //    'hello.index', 'App\Http\Composers\HelloComposer'
        //);
        //$validator = $this->app['validator'];
        //$validator->resolver(function($translator, $data, $rules, $messages){
        //    return new HelloValidator($translator, $data, $rules, $messages);
        //});
        Validator::extend('hello', function($attribute, $value, $parameters, $validator){
            return $value % 2 == 0;
        });
    }
}
