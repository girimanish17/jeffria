<?php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeDashboardController;


Route::get('/sign-in', [LoginController::class, 'login'])->name('sign_in');

Route::get('/sign-up', [LoginController::class, 'register'])->name('sign_up');

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







