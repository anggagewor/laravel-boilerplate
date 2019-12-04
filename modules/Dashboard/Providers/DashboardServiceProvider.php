<?php
namespace Modules\Dashboard\Providers;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider {

    public function boot(){
        $this->registerViews();
    }
    public function register(){
        $this->app->register(DashboardRouteServiceProvider::class);
    }
    public function registerViews(){
        $viewPath   = resource_path('views/modules/dashboard');
        $sourcePath = base_path('modules/Dashboard/views');
        $this->publishes([
            $sourcePath => $viewPath
        ],'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/dashboard';
        }, Config::get('view.paths')), [$sourcePath]), 'dashboard');
    }
    public function provides()
    {
        return [];
    }
}
