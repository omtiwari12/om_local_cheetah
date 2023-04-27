<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cheetah_Dashboard;
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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/Request_Open',[Cheetah_Dashboard::class,'table1']);
Route::get('/Completed_Request',[Cheetah_Dashboard::class,'check']);
//User_Dashboard

// Route::get('/User_Dashboard', function () {
//     return view('User_Dash.User_Dashboard');
// });



// Route::get('Login', [Cheetah_Dashboard::class, 'index7'])->name('Login');
// Route::get('Register', [Cheetah_Dashboard::class, 'index7'])->name('Index_DataTable');


Route::get('Index_DataTable1', [Cheetah_Dashboard::class, 'index1'])->name('Index_DataTable1');
Route::get('Index_DataTable2', [Cheetah_Dashboard::class, 'index2'])->name('Index_DataTable2');
Route::get('Index_DataTable3', [Cheetah_Dashboard::class, 'index3'])->name('Index_DataTable3');
Route::get('Index_DataTable4', [Cheetah_Dashboard::class, 'index4'])->name('Index_DataTable4');


// Route::get('Index_DataTable', [Cheetah_Dashboard::class, 'dropzoneUi' ]);
// Route::post('Index_DataTable', [Cheetah_Dashboard::class, 'dropzoneFileUpload' ])->name('Index_DataTable');



Route::get('Request_Graphics', [Cheetah_Dashboard::class, 'dropzoneUi' ]);
Route::post('Request_Graphics', [Cheetah_Dashboard::class, 'dropzoneFileUpload' ])->name('Request_Graphics');

//Request pages--

Route::get('Open_Request', [Cheetah_Dashboard::class, 'index5'])->name('Open_Request');
// Route::get('Open_Request', [Cheetah_Dashboard::class, 'index6'])->name('Open_Request');
// Route::get('Open_Request', [Cheetah_Dashboard::class, 'index7'])->name('Open_Request');
// Route::get('Open_Request', [Cheetah_Dashboard::class, 'index8'])->name('Open_Request');

// Route::get('User_Dashboard', [Cheetah_Dashboard::class, 'index5'])->name('User_Dashboard');


// -----Request Details pages------

Route::get('View_All_Request', [Cheetah_Dashboard::class, 'All_Request'])->name('View_All_Request');


Route::get('Open_Request', [Cheetah_Dashboard::class, 'Open'])->name('Open_Request');
Route::get('Completed_Request', [Cheetah_Dashboard::class, 'Complete'])->name('Completed_Request');
Route::get('Drafts_Request', [Cheetah_Dashboard::class, 'Draft'])->name('Drafts_Request');
Route::get('On_Hold_Request', [Cheetah_Dashboard::class, 'Hold'])->name('On_Hold_Request');
Route::get('Due_Today_Request', [Cheetah_Dashboard::class, 'Due'])->name('Due_Today_Request');
Route::get('Overdue_Request', [Cheetah_Dashboard::class, 'Overdue'])->name('OOverdue_Request');
Route::get('Ready_For_Review_Request', [Cheetah_Dashboard::class, 'Ready'])->name('Ready_For_Review_Request');




// -------Request pages------

Route::get('/Request_Page',[Cheetah_Dashboard::class,'Request_Page']);

Route::get('View_All_Request', [Cheetah_Dashboard::class, 'All_Request'])->name('View_All_Request');


Route::get('/Request_Graphics',[Cheetah_Dashboard::class,'Request_Graphics']);
Route::post('/Request_Graphics',[Cheetah_Dashboard::class,'Req_Graphics']);

Route::get('/Request_web',[Cheetah_Dashboard::class,'Request_web']);
Route::post('/Request_web',[Cheetah_Dashboard::class,'Req_Web']);

Route::get('/Request_App',[Cheetah_Dashboard::class,'Request_App']);
Route::post('/Request_App',[Cheetah_Dashboard::class,'Req_App']);

Route::get('/Request_Digital',[Cheetah_Dashboard::class,'Request_Digital']);
Route::post('/Request_Digital',[Cheetah_Dashboard::class,'Req_Digital']);




// new login register


// Route::get('/login',[AuthController::class,'index'])->name('login');
// Route::post('/login',[AuthController::class,'index'])->name('login');
// Route::get('/register',[AuthController::class,'register_view'])->name('register');





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/User_Dashboard', function () {
        return view('User_Dashboard');
    })->name('User_Dashboard');
});

// Route::middleware(['auth:sanctum','verified'])->get('/med', function (Request $request) {
//     return Inertia\Inertia::render('Med');
// })->name('med');
// Route::group(['middleware' =>'auth'],
//  function () {

//     Route::get('/login',[Cheetah_Dashboard::class,'login']);
       
//  });