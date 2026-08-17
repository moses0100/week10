<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClaimController;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/student/{id}', function ($id) {
    return view('student', ['id' => $id]);
})->name('student.profile');

Route::fallback(function () {
    return 'ไม่พบหน้าเว็บ';
});

Route::get('/abouts', [AdminController::class, 'abouts'])->name('abouts');
Route::get('/blogs', [AdminController::class, 'blogs'])->name('blogs');
Route::get('/create', [AdminController::class, 'create'])->name('create');
Route::post('/insert', [AdminController::class, 'insert']);

Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return "เชื่อมต่อฐานข้อมูลสำเร็จ! Database name: " . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        return "ไม่สามารถเชื่อมต่อฐานข้อมูลได้: " . $e->getMessage();
    }
});

Route::get('/delete/{id}', [AdminController::class, 'delete'])->name('delete');  


Route::get('/claims/create', [ClaimController::class, 'create'])->name('claims.create');
Route::post('/claims', [ClaimController::class, 'store'])->name('claims.store');
Route::get('/change/{id}',[AdminController::class,'change'])->name('change');
Route::get('/edit/{id}',[AdminController::class,'edit'])->name('edit');
Route::post('/update/{id}',[AdminController::class,'update'])->name('update');