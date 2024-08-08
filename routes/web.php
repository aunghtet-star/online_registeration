<?php

use App\Http\Controllers\Auth\AdminAuthenticatedSessionController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BContactUsController;
use App\Http\Controllers\Backend\FifthYearController;
use App\Http\Controllers\Backend\FirstYearController;
use App\Http\Controllers\Backend\ForthYearController;
use App\Http\Controllers\Backend\GeneralController;
use App\Http\Controllers\Backend\InboxController;
use App\Http\Controllers\Backend\InboxForSecToFinalYearController;
use App\Http\Controllers\Backend\SecondYearController;
use App\Http\Controllers\Backend\SixthYearController;
use App\Http\Controllers\Backend\ThirdYearController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\FirstYearEnrollmentController;
use App\Http\Controllers\Frontend\SecToFinalYearEnrollmentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/first-yr-enroll', [FirstYearEnrollmentController::class, 'index']);
    Route::post('/first-yr-enroll/store', [FirstYearEnrollmentController::class, 'store']);
    Route::get('/first-yr-enroll/review', [FirstYearEnrollmentController::class, 'review'])->name('first_year.review');


    Route::get('/sec-to-final-yr-enroll', [SecToFinalYearEnrollmentController::class, 'index']);
    Route::post('/sec-to-final-yr-enroll/store', [SecToFinalYearEnrollmentController::class, 'store']);

    Route::post('/contact_us', [ContactUsController::class, 'contact']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('admin')->middleware('admin')->group(callback: function () {
    Route::resource('/ad-user', AdminController::class);
    Route::resource('/user', UserController::class);

    Route::get('/first_year', [FirstYearController::class, 'index']);
    Route::get('/first_year/detail/{id}', [FirstYearController::class, 'detail']);


    Route::get('/second_year_civil', [SecondYearController::class, 'civil']);
    Route::get('/second_year_ec', [SecondYearController::class, 'ec']);
    Route::get('/second_year_ep', [SecondYearController::class, 'ep']);
    Route::get('/second_year_mech', [SecondYearController::class, 'mech']);
    Route::get('/second_year_it', [SecondYearController::class, 'it']);
    Route::get('/second_year_mc', [SecondYearController::class, 'mc']);
    Route::get('/second_year_met', [SecondYearController::class, 'met']);
    Route::get('/second_year_BioT', [SecondYearController::class, 'BioT']);
    Route::get('/second_year_nt', [SecondYearController::class, 'nt']);

    Route::get('/third_year_civil', [ThirdYearController::class, 'civil']);
    Route::get('/third_year_ec', [ThirdYearController::class, 'ec']);
    Route::get('/third_year_ep', [ThirdYearController::class, 'ep']);
    Route::get('/third_year_mech', [ThirdYearController::class, 'mech']);
    Route::get('/third_year_it', [ThirdYearController::class, 'it']);
    Route::get('/third_year_mc', [ThirdYearController::class, 'mc']);
    Route::get('/third_year_met', [ThirdYearController::class, 'met']);
    Route::get('/third_year_BioT', [ThirdYearController::class, 'BioT']);
    Route::get('/third_year_nt', [ThirdYearController::class, 'nt']);

    Route::get('/forth_year_civil', [ForthYearController::class, 'civil']);
    Route::get('/forth_year_ec', [ForthYearController::class, 'ec']);
    Route::get('/forth_year_ep', [ForthYearController::class, 'ep']);
    Route::get('/forth_year_mech', [ForthYearController::class, 'mech']);
    Route::get('/forth_year_it', [ForthYearController::class, 'it']);
    Route::get('/forth_year_mc', [ForthYearController::class, 'mc']);
    Route::get('/forth_year_met', [ForthYearController::class, 'met']);
    Route::get('/forth_year_BioT', [ForthYearController::class, 'BioT']);
    Route::get('/forth_year_nt', [ForthYearController::class, 'nt']);


    Route::get('/fifth_year_civil', [FifthYearController::class, 'civil']);
    Route::get('/fifth_year_ec', [FifthYearController::class, 'ec']);
    Route::get('/fifth_year_ep', [FifthYearController::class, 'ep']);
    Route::get('/fifth_year_mech', [FifthYearController::class, 'mech']);
    Route::get('/fifth_year_it', [FifthYearController::class, 'it']);
    Route::get('/fifth_year_mc', [FifthYearController::class, 'mc']);
    Route::get('/fifth_year_met', [FifthYearController::class, 'met']);
    Route::get('/fifth_year_BioT', [FifthYearController::class, 'BioT']);
    Route::get('/fifth_year_nt', [FifthYearController::class, 'nt']);


    Route::get('/sixth_year_civil', [SixthYearController::class, 'civil']);
    Route::get('/sixth_year_ec', [SixthYearController::class, 'ec']);
    Route::get('/sixth_year_ep', [SixthYearController::class, 'ep']);
    Route::get('/sixth_year_mech', [SixthYearController::class, 'mech']);
    Route::get('/sixth_year_it', [SixthYearController::class, 'it']);
    Route::get('/sixth_year_mc', [SixthYearController::class, 'mc']);
    Route::get('/sixth_year_met', [SixthYearController::class, 'met']);
    Route::get('/sixth_year_BioT', [SixthYearController::class, 'BioT']);
    Route::get('/sixth_year_nt', [SixthYearController::class, 'nt']);



    Route::get('/sec_to_final_year/detail/{id}', [GeneralController::class, 'detail']);

    Route::get('/inbox', [InboxController::class, 'index']);
    Route::get('/inbox/detail/{id}', [InboxController::class, 'detail']);
    Route::post('/inbox/archive/{id}', [InboxController::class, 'archive']);
    Route::post('/inbox/delete/{id}', [InboxController::class, 'delete']);

    Route::get('/inbox_sec_to_final_year', [InboxForSecToFinalYearController::class, 'index']);
    Route::get('/inbox_sec_to_final_year/detail/{id}', [InboxForSecToFinalYearController::class, 'detail']);
    Route::post('/inbox_sec_to_final_year/archive/{id}', [InboxForSecToFinalYearController::class, 'archive']);
    Route::post('/inbox_sec_to_final_year/delete/{id}', [InboxForSecToFinalYearController::class, 'delete']);

    Route::get('/contact_us', [BContactUsController::class, 'index']);

    Route::post('admin.logout', [AdminAuthenticatedSessionController::class, 'destroy'])
        ->name('admin.logout');

});


require __DIR__.'/auth.php';
