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
        \ModulePassport\Models\Resource::observe(\ModulePassport\Observers\ResourceObserver::class);
        \ModulePassport\Models\Permission::observe(\ModulePassport\Observers\PermissionObserver::class);
        //\ModuleCulture\Models\Category::observe(\ModuleCulture\Observers\CategoryObserver::class);
        \ModuleCulture\Models\Figure::observe(\ModuleCulture\Observers\FigureObserver::class);
        \ModuleCulture\Models\Book::observe(\ModuleCulture\Observers\BookObserver::class);
        \ModuleCulture\Models\Affair::observe(\ModuleCulture\Observers\AffairObserver::class);
        \ModuleCulture\Models\Record::observe(\ModuleCulture\Observers\RecordObserver::class);

        \Validator::extend('mobile', 'Framework\Baseapp\Rules\Mobile@passes');
        \Validator::replacer('mobile', function($message, $attribute, $rule, $parameters) {
            return 'The ' . $attribute . ' must be mobile.';
        });
    }
}
