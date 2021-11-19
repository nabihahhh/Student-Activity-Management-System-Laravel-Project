<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProposalController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/proposal-step-1', [ProposalController::class, 'createStep1'])->name('signup1');
Route::post('/proposal-post-step-1', [ProposalController::class,'PostcreateStep1'])->name('proposal.post.step.1');
Route::get('/proposal-create-step-2', [ProposalController::class,'createStep2'])->name('proposal.create.step.2');
Route::post('/proposal-post-step-2', [ProposalController::class,'PostcreateStep2'])->name('proposal.post.step.2');
Route::get('/proposal-create-step-3', [ProposalController::class,'createStep3'])->name('proposal.create.step.3');
Route::post('/proposal-post-step-3', [ProposalController::class,'PostcreateStep3'])->name('proposal.post.step.3');
Route::get('/proposal-create-step-4', [ProposalController::class,'createStep4'])->name('proposal.create.step.4');
Route::post('/proposal-post-step-4', [ProposalController::class,'PostcreateStep4'])->name('proposal.post.step.4');
Route::get('/proposal-create-step-5', [ProposalController::class,'createStep5'])->name('proposal.create.step.5');
Route::post('/proposal-post-step-5', [ProposalController::class,'PostcreateStep5'])->name('proposal.post.step.5');
Route::post('/remove-image', [ProposalController::class,'removeImage'])->name('remove.image');
Route::post('/store', [ProposalController::class,'store'])->name('store');
Route::get('/data1', [ProposalController::class,'index1'])->name('index1');

Route::get('/report-step-1', [ReportController::class, 'createStep1'])->name('signup');
Route::post('/report-post-step-1', [ReportController::class,'PostcreateStep1'])->name('report.post.step.1');
Route::get('/report-create-step-2', [ReportController::class,'createStep2'])->name('report.create.step.2');
Route::post('/report-post-step-2', [ReportController::class,'PostcreateStep2'])->name('report.post.step.2');
Route::get('/report-create-step-3', [ReportController::class,'createStep3'])->name('report.create.step.3');
Route::post('/report-post-step-3', [ReportController::class,'PostcreateStep3'])->name('report.post.step.3');
Route::post('/remove-image', [ReportController::class,'removeImage'])->name('remove.image');
Route::post('/store', [ReportController::class,'store'])->name('store');
Route::get('/data', [ReportController::class,'index'])->name('index');
  

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

//auth route for both 
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
});

// // for users
// Route::group(['middleware' => ['auth', 'role:organizer']], function() { 
//     Route::get('/dashboard/report-step-1', [ReportController::class, 'createStep1'])->name('signup');
// });

require __DIR__.'/auth.php';
