<?php
namespace Modules\Auth\Providers;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider {

    public function boot(){
        $this->registerViews();
    }
    public function register(){
        $this->app->register(AuthRouteServiceProvider::class);
    }
    public function registerViews(){
        $viewPath   = resource_path('views/modules/auth');
        $sourcePath = base_path('modules/Auth/views');
        $this->publishes([
            $sourcePath => $viewPath
        ],'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/auth';
        }, Config::get('view.paths')), [$sourcePath]), 'auth');
    }
    public function provides()
    {
        return [];
    }
}
