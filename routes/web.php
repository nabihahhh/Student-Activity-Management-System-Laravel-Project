<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\VerifyController;
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
Route::post('/store1', [ProposalController::class,'store1'])->name('store1');
Route::get('/data1', [ProposalController::class,'index1'])->name('index1');


Route::get('proposal/{proposal}/showSend', 'DashboardController@showSend')->name('admin.proposal.showSend');
Route::post('proposal/{proposal}/send', 'DashboardController@send')->name('admin.proposal.send');


Route::get('/report-step-1', [ReportController::class, 'createStep1'])->name('signup');
Route::post('/report-post-step-1', [ReportController::class,'PostcreateStep1'])->name('report.post.step.1');
Route::get('/report-create-step-2', [ReportController::class,'createStep2'])->name('report.create.step.2');
Route::post('/report-post-step-2', [ReportController::class,'PostcreateStep2'])->name('report.post.step.2');
Route::get('/report-create-step-3', [ReportController::class,'createStep3'])->name('report.create.step.3');
Route::post('/report-post-step-3', [ReportController::class,'PostcreateStep3'])->name('report.post.step.3');
Route::post('/remove-image', [ReportController::class,'removeImage'])->name('remove.image');
Route::post('/store', [ReportController::class,'store'])->name('store');
Route::get('/data', [ReportController::class,'index'])->name('index');


    Route::get('/showVerifyDetails/{id}','VerifyController@showVerifyDetails')->name('show.Verify.Details'); 
    Route::get('/showVerifyDetails2/{id}','VerifyController@showVerifyDetails2')->name('show.Verify.Details2'); 
    Route::get('proposal/{proposal}/showAnalyze', 'DashboardController@showAnalyze')->name('admin.proposal.showAnalyze');
    Route::post('proposal/{proposal}/analyze', 'DashboardController@analyze')->name('admin.proposal.analyze');

    Route::get('report/{report}/showAnalyze', 'DashboardController@showAnalyze2')->name('admin.report.showAnalyze');
    Route::post('report/{report}/analyze', 'DashboardController@analyze2')->name('admin.report.analyze');


    Route::group(['prefix' => 'staddAdmin', 'as' => 'admin.', 'namespace' => 'staddAdmin', 'middleware' => ['auth']], function () {
    Route::resource('proposal', 'ProposalController');
    Route::resource('users', 'UsersController');
});

    // Route::delete('comments/destroy', 'CommentsController@massDestroy')->name('comments.massDestroy');
    Route::resource('feedback', 'FeedbackController');

    Route::get('/ApplicantApproval/{id}', 'LetterController@pdf');
// for approval committee
Route::group(['middleware' => ['auth', 'role:approvalCommittee']], function() { 
    //approval committee view: show details of selected PPF from (list of programme proposal need to be verify)
    Route::get('/showStatus/{id}','VerifyController@verifyFormCreate')->name('verify.Form.Create'); 

    //approval committee view: after submit feedback and action of selected PPF from (list of programme proposal need to be verify)
    Route::post('/postStatus/{id}','VerifyController@verifyFormPost')->name('verify.Form.Post'); 

    //approval committee view: History list of PPF that has been verify by user (with status)
    //organizer view: History list of PPF that has been submitted (with status) //route: organizer dashboard view 
    Route::get('/showListStatus','VerifyController@verifyList')->name('show.List.Status'); 

    //approval committee view: PPF details from (History list of PPF that has been verify by user)
    //organizer view:  PPF details from (PPF list that has been submitted (with status)) //route: organizer dashboard view 
    //add download approval letter button
    // Route::get('/showVerifyDetails/{id}','VerifyController@showVerifyDetails')->name('show.Verify.Details'); 

   
});
 //approval committee view: show details of selected PPF from (list of programme proposal need to be verify)
 Route::get('/showStatus/{id}','VerifyController@verifyFormCreate')->name('verify.Form.Create'); 

 //approval committee view: after submit feedback and action of selected PPF from (list of programme proposal need to be verify)
 Route::post('/postStatus/{id}','VerifyController@verifyFormPost')->name('verify.Form.Post'); 

 //approval committee view: History list of PPF that has been verify by user (with status)
 //organizer view: History list of PPF that has been submitted (with status) //route: organizer dashboard view 
 Route::get('/showListStatus','VerifyController@verifyList')->name('show.List.Status'); 

 //approval committee view: PPF details from (History list of PPF that has been verify by user)
 //organizer view:  PPF details from (PPF list that has been submitted (with status)) //route: organizer dashboard view 
 //add download approval letter button
 // Route::get('/showVerifyDetails/{id}','VerifyController@showVerifyDetails')->name('show.Verify.Details'); 
 //approval committee view: list of programme proposal need to be verify
 Route::get('/list-PPF-required-verification', 'ProposalController@searchKeyboard')->name('list.PPF.Verify'); 

Route::group(['middleware' => ['auth', 'role:staddAdmin']], function() { 
   

    
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

//auth route for both 
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
   
});

Route::get('/pending-report', [DashboardController::class,'index2'])->name('pending.prf');
Route::get('/progress-report', [DashboardController::class,'index3'])->name('progress.report');


Route::post('proposal/{user_id}/send', 'DashboardController@send')->name('admin.send');

Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('dashboard')->with('status', session('status'));
    }

    
});

// // for users
// Route::group(['middleware' => ['auth', 'role:organizer']], function() { 
//     Route::get('/dashboard/report-step-1', [ReportController::class, 'createStep1'])->name('signup');
// });

require __DIR__.'/auth.php';
