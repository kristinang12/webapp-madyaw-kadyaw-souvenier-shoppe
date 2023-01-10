<?php
use App\Http\Controllers\AdminController;

use App\View\Components\AdminLayout;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
Route::middleware('auth', 'is_admin')->group(function(){

                Route::get('/admin',[AdminController::class, 'index'])->name('admin.dashboard');
                Route::get('/list',[AdminController::class, 'list'])->name('list.dashboard');

});
Route::middleware('auth')->group(function(){

                
                Route::get('/announcement',[AdminController::class, 'announcement'])->name('announcement.dashboard');
                
});
