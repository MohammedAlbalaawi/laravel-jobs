<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        Paginator::useBootstrapFive();

        Event::listen(
            \Illuminate\Auth\Events\Authenticated::class,
            function () {
                View::share('notifications', [
                    'users' => Auth::user()->unreadNotifications ?? [],
                    'unReadMessagesCount' => Auth::user()?->unreadNotifications()?->count() ?? 0,
                    'allMssagesCount' => Auth::user()?->Notifications()?->count() ?? 0,
                ]);
            }
        );
    }
}
