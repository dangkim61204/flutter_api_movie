<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Define your route model bindings, pattern filters, etc.
     */
    public function boot(): void
    {
      
        

        // Map routes/api.php cho route dạng /api/...
        Route::middleware('api')
            ->prefix('api')
            ->group(base_path('routes/api.php'));

        // Map routes/web.php nếu bạn dùng giao diện
        Route::middleware('web')
            ->group(base_path('routes/web.php'));
    }
}
