<?php
namespace Modules\Auth\Providers;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;

class AuthRouteServiceProvider extends RouteServiceProvider {

    protected $namespace = 'Modules\Auth\Resources';
    protected $path = 'modules/Auth';

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
