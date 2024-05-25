<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\WelcomePanelController;
use App\Http\Controllers\HomeBookingPanelController;
use App\Http\Controllers\HomePromotionPanelController;
use App\Http\Controllers\HomeNewsPanelController;
use App\Http\Controllers\HomeMembershipPanelController;
use App\Http\Controllers\HomeTakeATourPanelController;
use App\Http\Controllers\HomeInstagramPanelController;
use App\Http\Controllers\HomeFacilitiesPanelController;
use App\Http\Controllers\HomeTextController;
use App\Http\Controllers\FooterTextController;
use App\Http\Controllers\PhoneIconController;
use App\Http\Controllers\WhatsAppIconController;
use App\Http\Controllers\LocationIconController;
use App\Http\Controllers\EmailIconController;
use App\Http\Controllers\WebIconController;
use App\Http\Controllers\InstagramIconController;
use App\Http\Controllers\AboutUsPanelController;
use App\Http\Controllers\AboutUsContentPanelController;
use App\Http\Controllers\AboutUsBannerPanelController;
use App\Http\Controllers\AboutUsTextController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactUsPanelController;
use App\Http\Controllers\ContactUsTextController;
use App\Http\Controllers\BookingPanelController;
use App\Http\Controllers\BookingTextController;
use App\Http\Controllers\MembershipPanelController;
use App\Http\Controllers\MembershipBiccGoldMemberPanelController;
use App\Http\Controllers\MembershipTextController;
use App\Http\Controllers\PackagePanelController;
use App\Http\Controllers\PackageTripPanel1Controller;
use App\Http\Controllers\PackageTripPanel2Controller;
use App\Http\Controllers\PackageTripPanel1ContentController;
use App\Http\Controllers\PackageTripPanel2ContentController;
use App\Http\Controllers\PackageTextController;
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
Route::get('/getFile/File/{id}', [FileController::class, 'getFile']);

Route::post('/upload/home/WelcomePanel', [WelcomePanelController::class, 'store']);
Route::get('/getFile/home/WelcomePanel', [WelcomePanelController::class, 'getFile']);

Route::post('/upload/home/BookingPanel', [HomeBookingPanelController::class, 'store']);
Route::get('/getFile/home/BookingPanel', [HomeBookingPanelController::class, 'getFile']);

Route::post('/upload/home/PromotionPanel', [HomePromotionPanelController::class, 'store']);
Route::get('/getFile/home/PromotionPanel', [HomePromotionPanelController::class, 'getFile']);

Route::post('/upload/home/NewsPanel', [HomeNewsPanelController::class, 'store']);
Route::get('/getFile/home/NewsPanel', [HomeNewsPanelController::class, 'getFile']);

Route::post('/upload/home/MembershipPanel', [HomeMembershipPanelController::class, 'store']);
Route::get('/getFile/home/MembershipPanel', [HomeMembershipPanelController::class, 'getFile']);

Route::post('/upload/home/TakeATourPanel', [HomeTakeATourPanelController::class, 'store']);
Route::get('/getFile/home/TakeATourPanel', [HomeTakeATourPanelController::class, 'getFile']);

Route::get('/InstagramPanel/top4', [HomeInstagramPanelController::class, 'getTop4']);
Route::resource('InstagramPanel', HomeInstagramPanelController::class);

Route::get('/FacilitiesPanel/top4', [HomeFacilitiesPanelController::class, 'getTop4']);
Route::resource('FacilitiesPanel', HomeFacilitiesPanelController::class);

Route::get('/HomeText/getText', [HomeTextController::class, 'getText']);
Route::resource('HomeText', HomeTextController::class);

Route::get('/FooterText/getText', [FooterTextController::class, 'getText']);
Route::resource('FooterText', FooterTextController::class);

Route::post('/upload/icon/phone', [PhoneIconController::class, 'store']);
Route::get('/getFile/icon/phone', [PhoneIconController::class, 'getFile']);

Route::post('/upload/icon/whatsApp', [WhatsAppIconController::class, 'store']);
Route::get('/getFile/icon/whatsApp', [WhatsAppIconController::class, 'getFile']);

Route::post('/upload/icon/location', [LocationIconController::class, 'store']);
Route::get('/getFile/icon/location', [LocationIconController::class, 'getFile']);

Route::post('/upload/icon/email', [EmailIconController::class, 'store']);
Route::get('/getFile/icon/email', [EmailIconController::class, 'getFile']);

Route::post('/upload/icon/web', [WebIconController::class, 'store']);
Route::get('/getFile/icon/web', [WebIconController::class, 'getFile']);

Route::post('/upload/icon/instagram', [InstagramIconController::class, 'store']);
Route::get('/getFile/icon/instagram', [InstagramIconController::class, 'getFile']);

Route::post('/upload/aboutus/AboutUsPanel', [AboutUsPanelController::class, 'store']);
Route::get('/getFile/aboutus/AboutUsPanel', [AboutUsPanelController::class, 'getFile']);

Route::post('/upload/aboutus/ContentPanel', [AboutUsContentPanelController::class, 'store']);
Route::get('/getFile/aboutus/ContentPanel', [AboutUsContentPanelController::class, 'getFile']);

Route::post('/upload/aboutus/BannerPanel', [AboutUsBannerPanelController::class, 'store']);
Route::get('/getFile/aboutus/BannerPanel', [AboutUsBannerPanelController::class, 'getFile']);

Route::get('/AboutUsText/getText', [AboutUsTextController::class, 'getText']);
Route::resource('AboutUsText', AboutUsTextController::class);

Route::resource('Gallery', GalleryController::class);

Route::post('/upload/ContactUsPanel', [ContactUsPanelController::class, 'store']);
Route::get('/getFile/ContactUsPanel', [ContactUsPanelController::class, 'getFile']);

Route::get('/ContactUsText/getText', [ContactUsTextController::class, 'getText']);
Route::resource('ContactUsText', ContactUsTextController::class);

Route::post('/upload/BookingPanel', [BookingPanelController::class, 'store']);
Route::get('/getFile/BookingPanel', [BookingPanelController::class, 'getFile']);

Route::get('/BookingText/getText', [BookingTextController::class, 'getText']);
Route::resource('BookingText', BookingTextController::class);

Route::post('/upload/MembershipPanel', [MembershipPanelController::class, 'store']);
Route::get('/getFile/MembershipPanel', [MembershipPanelController::class, 'getFile']);

Route::post('/upload/MembershipBiccGoldMemberPanel', [MembershipBiccGoldMemberPanelController::class, 'store']);
Route::get('/getFile/MembershipBiccGoldMemberPanel', [MembershipBiccGoldMemberPanelController::class, 'getFile']);

Route::get('/MembershipText/getText', [MembershipTextController::class, 'getText']);
Route::resource('MembershipText', MembershipTextController::class);

Route::post('/upload/PackagePanel', [PackagePanelController::class, 'store']);
Route::get('/getFile/PackagePanel', [PackagePanelController::class, 'getFile']);

Route::post('/upload/PackageTripPanel1', [PackageTripPanel1Controller::class, 'store']);
Route::get('/getFile/PackageTripPanel1', [PackageTripPanel1Controller::class, 'getFile']);

Route::post('/upload/PackageTripPanel2', [PackageTripPanel2Controller::class, 'store']);
Route::get('/getFile/PackageTripPanel2', [PackageTripPanel2Controller::class, 'getFile']);

Route::post('/upload/PackageTripPanel1Content', [PackageTripPanel1ContentController::class, 'store']);
Route::get('/getFile/PackageTripPanel1Content', [PackageTripPanel1ContentController::class, 'getFile']);

Route::post('/upload/PackageTripPanel2Content', [PackageTripPanel2ContentController::class, 'store']);
Route::get('/getFile/PackageTripPanel2Content', [PackageTripPanel2ContentController::class, 'getFile']);

Route::get('/PackageText/getText', [PackageTextController::class, 'getText']);
Route::resource('PackageText', PackageTextController::class);

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
