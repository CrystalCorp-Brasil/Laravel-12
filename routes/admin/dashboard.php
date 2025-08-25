<?php
    use App\Http\Controllers\Admin\DashboardController;
    use Illuminate\Support\Facades\Route;

    Route::middleware(['verified'])->controller(DashboardController::class)->group(function(){
        Route::get('/dashboard', 'index')->name('dashboard');
    });
