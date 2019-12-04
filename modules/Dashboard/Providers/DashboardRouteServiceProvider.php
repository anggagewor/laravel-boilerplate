<?php
namespace Modules\Dashboard\Providers;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;

class DashboardRouteServiceProvider extends RouteServiceProvider {

    protected $namespace = 'Modules\Dashboard\Resources';
    protected $path = 'modules/Dashboard';

    public function boot()
    {
        parent::boot();
    }

    public function map(){
        $this->mapWebRoutes();
    }

    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path($this->path.'/routes/web.php'));
    }
}
