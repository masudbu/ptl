<?php

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
    return view('home');
});

Auth::routes();
// Login and Logout Routes...

Route::get('logout',  [App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');


// Password Reset Routes...
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ForgotPasswordController::class, 'reset'])->name('password.update');

// Confirm Password 
Route::get('password/confirm', [ConfirmPasswordController::class, 'showConfirmForm'])->name('password.confirm');
Route::post('password/confirm', [ConfirmPasswordController::class, 'confirm']);

// Email Verification Routes...
Route::get('email/verify', [VerificationController::class, 'show'])->name('verification.notice');
Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
Route::get('email/resend',  [VerificationController::class, 'resend'])->name('verification.resend');
/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
Route::post('/import_file', [App\Http\Controllers\HomeController::class, 'import'])->name('importExcel');
Route::get('/export_file', [App\Http\Controllers\HomeController::class, 'export'])->name('exportExcel');

/*Route::group(['middleware'=>'auth'], function(){

})*/
//For user controller routes
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('get_users');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/daily-production-form', [App\Http\Controllers\DashboardController::class, 'dailyProductionEntryForm'])->name('dailyProductionEntryForm');
Route::post('/daily-production-update', [App\Http\Controllers\DashboardController::class, 'dailyProductionEntry'])->name('dailyProductionStore');
Route::get('/daily-production-view', [App\Http\Controllers\DashboardController::class, 'dailyProductionView'])->name('dailyProductionList');
Route::post('/production-advance-search',[App\Http\Controllers\DashboardController::class, 'production_advance_search'])->name('production_adv_search');
Route::get('/show-production-slip',[App\Http\Controllers\DashboardController::class, 'show_production_slip'])->name('showProductionSlip');
Route::get('/show-production-view',[App\Http\Controllers\DashboardController::class, 'show_production_view'])->name('showProductionview');

Route::get('/daily-production-review',[App\Http\Controllers\DashboardController::class, 'daily_production_review'])->name('dailyProductionReview');

//for the next record
Route::get('/next-production-record',[App\Http\Controllers\DashboardController::class, 'next_production_record'])->name('nextProductionRecord');
//for the Previous record
Route::get('/previous-production-record',[App\Http\Controllers\DashboardController::class, 'previous_production_record'])->name('previousProductionRecord');
//Production Review Search
Route::post('/production-review-search',[App\Http\Controllers\DashboardController::class, 'production_review_search'])->name('productionReviewSearch');

//For Showing Production Edit
Route::get('/show-production',[App\Http\Controllers\DashboardController::class, 'showProduction'])->name('showDailyProduction');
Route::post('/update-production',[App\Http\Controllers\DashboardController::class, 'updateProduction'])->name('dailyProductionUpdate');

//Yarn Dyeing Production File Uploads
Route::get('/yarndyeing', [App\Http\Controllers\YarndyeingController::class, 'index'])->name('ptl-yarnDyeing');

Route::post('/yarndyeing_import_file', [App\Http\Controllers\YarndyeingController::class, 'yarndyeing_import'])->name('importExcelYarnDyeing');

Route::get('/yarndyeing-export-file', [App\Http\Controllers\YarndyeingController::class, 'yarndyeing_export'])->name('exportExcelYarnDyeing');

//Master Setup Controller Diclare
//for process add form
Route::get('/department-create', [App\Http\Controllers\MasterController::class, 'department_create'])->name('departmentForm');
Route::post('/department-add', [App\Http\Controllers\MasterController::class, 'department_add'])->name('departmentAdd');
Route::get('/add-process', [App\Http\Controllers\MasterController::class, 'index'])->name('processForm');
Route::post('/process-add', [App\Http\Controllers\MasterController::class, 'process_add'])->name('processAdd');

//This section for fabric transfer 
Route::get('/finish-to-final',[App\Http\Controllers\TransferController::class, 'index'])->name('finishToFinal');


Route::get('/search', [App\Http\Controllers\TransferController::class, 'search'])->name('search');