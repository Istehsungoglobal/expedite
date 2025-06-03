<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StateFeeController;
use App\Http\Controllers\FunnelController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TaxController;
use App\Http\Controllers\FontPageController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\CompanyDetailController;





Route::redirect('/', '/admin')->middleware('auth');

Route::post('phone-checker', function (Request $request) {
    $data = $request->validate([
        'phone' => 'required|regex:/^\+?[0-9]{10,15}$/',
        'skip' => 'nullable|integer|exists:users,id',
    ]);
    $exists = User::where('phone', $data['phone'])->when('skip', fn ($q) => $q->where('id', '!=', $data['skip']))->exists();

    return response()->json(['exists' => $exists]);
})->name('phone-checker');

Route::prefix('admin')->as('admin.')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('users/{user}/impersonate', [UserController::class, 'impersonate'])->name('users.impersonate');
    Route::get('users/export', [UserController::class, 'export'])->name('users.export');
    Route::resource('users', UserController::class)->middleware('role:Admin|Super Admin');
    Route::get('/user', [UserController::class, 'userindex'])->middleware('role:Admin|Super Admin')->name('user');
    Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::resource('roles', RoleController::class);
    Route::resource('state-fees', StateFeeController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('packages', PackageController::class);
    //Tax.......................
    Route::get('/tax', [TaxController::class, 'index'])->name('tax');
    Route::get('/notification', [BackendController::class, 'index'])->name('notification');
    Route::get('/recommendations', [BackendController::class, 'recommendations'])->name('recommendations');
    Route::get('/payment', [BackendController::class, 'payment'])->name('payment');
    Route::get('/single', [BackendController::class, 'single'])->name('single');
    Route::get('/business', [BackendController::class, 'business'])->name('business');
    Route::get('/orderhistorypay', [BackendController::class, 'orderhistorypay'])->name('orderhistorypay');
    Route::get('/ticket', [BackendController::class, 'ticket'])->name('ticket');

    Route::get('/taxfiling', [BackendController::class, 'taxfiling'])->name('taxfiling');
    Route::get('/taxfilingcreate', [BackendController::class, 'taxfilingcreate'])->name('taxfilingcreate');



    Route::get('/affiliate', [BackendController::class, 'affiliate'])->name('affiliate');
    //User.....................


    //Payment...................
    
    Route::get('/companyinfo', [CompanyDetailController::class, 'companyinfo'])->name('companyinfo');
    Route::get('/registered', [CompanyDetailController::class, 'registered'])->name('registered');
    Route::get('/orderhistory', [CompanyDetailController::class, 'orderhistory'])->name('orderhistory');
    Route::get('/compliance', [CompanyDetailController::class, 'compliance'])->name('compliance');


    //funnel....................

    Route::get('/primarypart', [FunnelController::class, 'primarypart'])->name('primarypart');
    Route::get('/primarypart', [FunnelController::class, 'showPrimaryPart']);
    Route::get('/secondarypart', [FunnelController::class, 'secondarypart'])->name('secondarypart');
    Route::get('/checkout', [FunnelController::class, 'checkout'])->name('checkout');
    Route::get('/invoice', [FunnelController::class, 'invoice'])->name('invoice');
    Route::get('/payment_failed', [FunnelController::class, 'payment_failed'])->name('payment_failed');
    Route::get('/thanks', [FunnelController::class, 'thanks'])->name('thanks');
    Route::get('/payments', [FunnelController::class, 'payments'])->name('payments');
    Route::get('/singleservicepayment', [FunnelController::class, 'singleservicepayment'])->name('singleservicepayment');
    Route::get('/congrats', [FunnelController::class, 'congrats'])->name('congrats');
    Route::get('/singleforms', [FunnelController::class, 'singleforms'])->name('singleforms');

});

//fontpages...................
Route::get('/home', [FontPageController::class, 'index'])->name('home');
Route::get('/about', [FontPageController::class, 'about'])->name('about');
Route::get('/pricing', [FontPageController::class, 'pricing'])->name('pricing');
Route::get('/contact', [FontPageController::class, 'contact'])->name('contact');
Route::get('/login', [FontPageController::class, 'login'])->name('login');
Route::get('/refund', [FontPageController::class, 'refund'])->name('refund');
Route::get('/terms', [FontPageController::class, 'terms'])->name('terms');
Route::get('/privacy', [FontPageController::class, 'privacy'])->name('privacy');
Route::get('/blog', [FontPageController::class, 'blog'])->name('blog');








