<?php

namespace App\Providers;

use App\Listeners\UpdateLastLogin;
use App\Models\Option;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Event::listen(
            UpdateLastLogin::class
        );

        Paginator::useBootstrapFive();

        RateLimiter::for('login-user', function (Request $request) {
            return Limit::perMinute(5)->by($request->email . $request->ip());
        });

        View::composer(['home.*', 'partials.home.*','email.send.*'], function ($view) {
            $options = Option::whereIn('key', [
                'name',
                'phone',
                'email',
                'address',
                'description',
                'web_logo',
                'gmap_link',
            ])->get()->keyBy('key');

            $socialLinks = [
                'facebook' => Option::where('key', 'facebook')->value('value'),
                'twitter' => Option::where('key', 'twitter')->value('value'),
                'instagram' => Option::where('key', 'instagram')->value('value'),
                'linkedin' => Option::where('key', 'linkedin')->value('value'),
                'discord' => Option::where('key', 'discord')->value('value'),
                'youtube' => Option::where('key', 'youtube')->value('value'),
                'github' => Option::where('key', 'github')->value('value'),
            ];

            $view->with('options', $options);
            $view->with('socialLinks', $socialLinks);
        });
    }
}
