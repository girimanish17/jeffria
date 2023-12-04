<?php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeDashboardController;


Route::get('/sign-in', [LoginController::class, 'login'])->name('sign_in');

Route::get('/sign-up', [LoginController::class, 'register'])->name('sign_up');

Route::post('/registration', [LoginController::class, 'registration'])->name('registration');

Route::get('/email_validation', [LoginController::class, 'email_validation'])->name('email_validation');

Route::get('/OTP-code', [LoginController::class, 'OTP_code'])->name('OTP_code');


Route::get('/', [HomeDashboardController::class, 'index'])->name('dashboard');

// PROJECTS
Route::get('projects/add-project', [HomeDashboardController::class, 'add_product'])->name('add_product');

Route::get('projects/traffic-report', [HomeDashboardController::class, 'traffic_report'])->name('traffic_report');

Route::get('projects/under-development', [HomeDashboardController::class, 'under_development'])->name('under_development');

Route::get('projects/launched-products', [HomeDashboardController::class, 'launched_products'])->name('launched_products');

// SATFFS
Route::get('staffs/overview', [HomeDashboardController::class, 'overview'])->name('overview');

Route::get('staffs/staffs-list', [HomeDashboardController::class, 'staffs_list'])->name('staffs_list');

Route::get('staffs/affiliate-traffic', [HomeDashboardController::class, 'affiliate_traffic'])->name('affiliate_traffic');

Route::get('staffs/salary-claim-status', [HomeDashboardController::class, 'salary_claim_status'])->name('salary_claim_status');

Route::get('message-center', [HomeDashboardController::class, 'message_center'])->name('message_center');

// Expenses
Route::get('expenses/overview', [HomeDashboardController::class, 'expenses_overview'])->name('expenses_overview');

Route::get('expenses/hosting-server', [HomeDashboardController::class, 'expenses_hosting_server'])->name('expenses_hosting_server');

Route::get('expenses/api', [HomeDashboardController::class, 'expenses_api'])->name('expenses_api');

Route::get('expenses/ads-pay', [HomeDashboardController::class, 'expenses_ads_pay'])->name('expenses_ads_pay');

Route::get('expenses/theme', [HomeDashboardController::class, 'expenses_theme'])->name('expenses_theme');

Route::get('expenses/plugin', [HomeDashboardController::class, 'expenses_plugin'])->name('expenses_plugin');

Route::get('expenses/software', [HomeDashboardController::class, 'expenses_software'])->name('expenses_software');

Route::get('summary', [HomeDashboardController::class, 'summary'])->name('summary');

// Help
Route::get('help/upgrade-to-pro', [HomeDashboardController::class, 'help_upgrade_to_pro'])->name('help_upgrade_to_pro');
