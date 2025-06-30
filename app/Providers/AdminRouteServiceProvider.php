<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;


class AdminRouteServiceProvider extends ServiceProvider
{
    /**
     * Define the routes for the admin panel.
     * 
     * 
     */

    protected function mapAdminRoutes(): void
    {
        Route::middleware('web')
            ->prefix('admin')
            ->group(base_path('routes/admin.php'));
    }


    public function boot(): void
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            // Route::middleware('api')
            //     ->prefix('api')
            //     ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/admin.php'));
        });
    }

    protected function configureRateLimiting(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }

    /**
     * Register the admin routes.
     */
}
