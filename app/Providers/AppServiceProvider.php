<?php

namespace App\Providers;

use App\Models\ContactUs;
use App\Models\FirstYearEnrollment;
use App\Models\SecToFinalYearEnrollment;
use Illuminate\Support\Facades\Auth;
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
        View::composer('*', function ($view) {
            $unread_noti = 0;
            $unread_noti_for_sec_to_final_year =0;
            $unread_noti_for_contact_us =0;
            if(Auth::guard('admin')->check()){
                $unread_noti = FirstYearEnrollment::count();
                $unread_noti_for_sec_to_final_year = SecToFinalYearEnrollment::count();
                $unread_noti_for_contact_us = ContactUs::count();
            }
            $view->with(['unread_noti' => $unread_noti,
                        'unread_noti_for_sec_to_final_year' => $unread_noti_for_sec_to_final_year,
                        'unread_noti_for_contact_us' => $unread_noti_for_contact_us
            ]);
        });

    }
}
