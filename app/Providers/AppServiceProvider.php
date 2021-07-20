<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View::share('commonAssetUrl', config('app.assetUrl'));
        \ModulePassport\Models\AttachmentPath::observe(\ModulePassport\Observers\AttachmentPathObserver::class);

        \Validator::extend('mobile', 'Framework\Baseapp\Rules\Mobile@passes');
        \Validator::replacer('mobile', function($message, $attribute, $rule, $parameters) {
            return 'The ' . $attribute . ' must be mobile.';
        });
    }
}
