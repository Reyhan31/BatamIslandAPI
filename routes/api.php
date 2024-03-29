<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\FileController;
use App\Models\Bookings;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/news/top4', [NewsController::class, 'getTop4']);
Route::resource('news', NewsController::class);
Route::get('/getBooked', [BookingsController::class, 'filterByMonthYear']);
Route::post('callbackXendit', [BookingsController::class, 'callbackXendit']);
Route::resource('bookings', BookingsController::class);
Route::get('/package/getPackage', [PackageController::class, 'getPackage']);
Route::resource('package', PackageController::class);
Route::post('sendBookingMail', [MailController::class, 'sendBookingMail']);
Route::post('sendContactUsMail', [MailController::class, 'sendContactUsMail']);
Route::post('sendMembershipMail', [MailController::class, 'sendMembershipMail']);
Route::post('sendSubscribeMail', [MailController::class, 'sendSubscribeMail']);
Route::post('upload', [FileController::class, 'store']);
Route::get('/getFile/{id}', [FileController::class, 'getFile']);


Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::post('register', [AuthController::class, 'register'])->name('register');
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
});
