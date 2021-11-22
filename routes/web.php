<?php

use App\Admin;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('/', 'HomeController@home');

Route::get('about', static function () {
    return view('about');
});

Route::get('services', static function () {
    return view('services');
});

Route::get('investments', 'HomeController@investmentPackages');

Route::get('contact', static function () {
    return view('contact');
});

Route::get('terms', static function () {
    return view('terms');
});

Route::get('legal', static function () {
    return view('legal');
});

Route::get('faq', static function () {
    return view('faq');
});

Route::get('certificates', static function () {
    return view('certificates');
});

Route::get('registration-complete', static function () {
    return view('registration-complete');
});

Route::post('contact/send', 'HomeController@contactForm');

Route::get('github/deploy/{password}', 'GithubDeploymentController@run');

Auth::routes();

// Password Recovery
Route::get('forgot-password', 'HomeController@forgotPassword');
Route::post('recover-password', 'HomeController@recoverPassword');

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/users', 'UserController@index')->name('users');

// User Section
// Perform User logout
Route::get('users-logout', 'Auth\LoginController@logout')->name('users-logout');

// User Dashboard
Route::get('users/dashboard', 'UserController@index')->name('users-dashboard');

// User Investment
Route::resource('users/investments', 'InvestmentController');
Route::post('users/submit-investments', 'InvestmentController@submitInvestment');

// Withdrawal
Route::get('user/withdraw/balance', [UserController::class, 'withdrawBalance'])
    ->name('user.withdraw-balance');
Route::post('user/withdraw/balance/submit', [UserController::class, 'withdrawBalanceSubmit'])
    ->name('user.withdraw-balance.submit');

// User account settings
Route::get('users/account-settings', 'UserController@accountSettings')
    ->name('settings.account');
Route::post('users/update-account', 'UserController@updateAccount')
    ->name('settings.update-account');

Route::post('users/settings/crypto-wallet/add', [UserController::class, 'addCryptoWallet'])
    ->name('settings.wallet.add');
Route::get('users/settings/crypto-wallets', [UserController::class, 'cryptoWallets'])
    ->name('settings.wallets');
Route::get('users/settings/crypto-wallet/{id}/edit', [UserController::class, 'editCryptoWallet'])
    ->name('settings.wallets.edit');
Route::put('users/settings/crypto-wallet/{id}/update', [UserController::class, 'updateCryptoWallet'])
    ->name('settings.wallets.update');
Route::delete('users/settings/crypto-wallet/{id}/delete', [UserController::class, 'deleteCryptoWallet'])
    ->name('settings.wallets.delete');

// Admin Section
// Login Page
Route::get('admin-login', 'Auth\AdminLoginController@showLoginForm')
    ->name('admin-login');

// Submit Login
Route::post('admin-login', ['as'=>'admin-login','uses'=>'Auth\AdminLoginController@login']);

// Perform Admin logout
Route::get('admin-logout', 'Auth\AdminLoginController@logout')
    ->name('admin-logout');

//Admin Dashboard Page
Route::get('admin/dashboard', 'AdminController@index')
    ->name('admin-dashboard');

//Admin Manage Users Page
Route::get('admin/manage-users', 'AdminController@manageUsers')->name('manage-users');

Route::get('admin/download/valid-id/{id}/{name}', 'AdminController@downloadFile')
    ->name('admin.download.valid-id');

// Admin Approve User
Route::post('admin/approve-users/{id}', ['uses' => 'AdminController@approveUser']);

// Delete User
Route::post('admin/delete-users/{id}', ['uses' => 'AdminController@deleteUser']);

//Fund User Wallet
Route::get('admin/fund-wallet/{id}',
    ['as'=>'admin.fund-wallet', 'uses'=>'AdminController@fundWalletPage']
);
Route::post('admin/fund-wallet/{id}', ['uses' => 'AdminController@fundWallet'])
    ->name('admin.wallet.fund');

//Add User Profit
Route::get('admin/user/profit/{id}',
    ['as'=>'admin.profit.page', 'uses'=>'AdminController@addProfitPage']
);
Route::post('admin/user/profit/{id}', ['as'=>'admin.profit.store', 'uses' => 'AdminController@addProfit']);

//Add User Commission
Route::get('admin/user/commission/{id}',
    ['as'=>'admin.commission.page', 'uses'=>'AdminController@addCommissionPage']
);
Route::post('admin/user/commission/{id}', ['as'=>'admin.commission.store', 'uses' => 'AdminController@addCommission']);

//Update User Bonus
Route::get('admin/user/bonus/{id}',
    ['as'=>'admin.bonus.page', 'uses'=>'AdminController@addBonusPage']
);
Route::post('admin/user/bonus/{id}', ['as'=>'admin.bonus.store', 'uses' => 'AdminController@addBonus']);

//Admin Manage Investments
Route::get('admin/manage-investments', 'AdminController@manageInvestments')
    ->name('manage-investments');

// Admin Approve Investment
Route::post('admin/approve-investments/{id}', ['uses' => 'AdminController@approveInvestment']);

// Admin Manage Investment Packages
Route::resource('admin/investments-packages', 'InvestmentPackageController');

//Add User Investment Page
Route::get('admin/add-users-investments/{id}',
    ['as'=>'admin.add-users-investments', 'uses'=>'AdminController@addUserInvestmentPage']
);

//Add User Investment Form
Route::post('admin/add-users-investments/{id}', ['uses' => 'AdminController@addUserInvestment']);

//Admin Withdrawal Requests
Route::get('admin/withdrawal-requests', 'AdminController@withdrawalRequests')->name('withdrawal-requests');
// Admin Approve Withdrawals
Route::post('admin/approve-withdrawal/{id}', ['uses' => 'AdminController@approveWithdrawal']);

//Admin Account Settings
Route::get('admin/account-settings', 'AdminController@adminAccountSettings')
    ->name('admin.account-settings');

//Update account
Route::put('admin/update-account', 'AdminController@updateAdminAccount')
    ->name('admin.update-account');

// Admin update Wallet Address
Route::post('admin/wallet-address/store', ['uses' => 'AdminController@storeWalletAddress'])
    ->name('admin.wallet-address.store');
Route::get('admin/wallet-address/{id}/edit', ['uses' => 'AdminController@editWalletAddress'])
    ->name('admin.wallet-address.edit');
Route::put('admin/wallet-address/{id}/update', ['uses' => 'AdminController@updateWalletAddress'])
    ->name('admin.wallet-address.update');
Route::delete('admin/wallet-address/{id}/delete', ['uses' => 'AdminController@deleteWalletAddress'])
    ->name('admin.wallet-address.delete');

// Github Deployment
// Must disable csrf in Http/Middleware/VerifyCsrfToken
Route::post('github/deploy', 'GithubDeploymentController@deploy');
