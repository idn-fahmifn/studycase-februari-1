<?php

use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResponController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::prefix('admin')->middleware(['auth', 'verified', AdminMiddleware::class])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Route Laporan
    Route::get('laporan', [ResponController::class, 'index'])->name('laporan');
    Route::get('respon/{param}', [ResponController::class, 'respon'])->name('respon');


});

Route::prefix('user')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('user.dashboard');
    })->name('dashboard.user');

    // route laporan
    Route::get('laporan-saya', [LaporanController::class, 'index'])->name('laporan.index');
    Route::get('buat-laporan', [LaporanController::class, 'create'])->name('laporan.create');
    Route::get('detail-laporan/{param}', [LaporanController::class, 'detail'])->name('laporan.detail');
    Route::post('kirim-laporan', [LaporanController::class, 'store'])->name('laporan.store');
});


Route::view('tampilan', 'template.template');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__ . '/auth.php';
