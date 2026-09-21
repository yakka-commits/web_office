<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\NewsController; // <-- Controller Berita yang baru dibuat
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ================= FRONTEND =================
Route::get('/', [HomeController::class, 'index'])->name('home');


// ================= ADMIN DASHBOARD =================
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// ================= PROTECTED ROUTES (Harus Login) =================
Route::middleware('auth')->group(function () {
    
    // --- Kelola Profil ---
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // --- Kelola Konten Admin ---
    // Route resource otomatis membuatkan rute index, create, store, edit, update, destroy
    Route::resource('admin/news', NewsController::class)->names('admin.news');
    
});

require __DIR__.'/auth.php';