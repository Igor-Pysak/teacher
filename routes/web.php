<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JournalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarkController;


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

Route::get('/', HomeController::class);
Route::resource('semester', JournalController::class)->only(['index']);
Route::get('mark/{student_id}', [MarkController::class,'index'])->name('student-marks');
Route::resource('journal', JournalController::class)->only(['index']);

Route::middleware(['admin'])->group(function () {
    Route::resource('journal', JournalController::class)->except(['index']);
    Route::resource('semester', JournalController::class)->except(['index']);
    Route::resource('createusers', JournalController::class)->only(['create']);
    Route::get('student/mark/edit/{mark_id}', [MarkController::class,'edit'])->name('student.mark.edit');
    Route::patch('student/mark/edit/{mark_id}', [MarkController::class,'update'])->name('student.mark.update');
    Route::get('student/mark/create/{student_id}', [MarkController::class,'create'])->name('student.mark.create');
    Route::post('student/mark/create/{student_id}', [MarkController::class,'store'])->name('student.mark.store');
    Route::delete('student/mark/delete/{mark_id}', [MarkController::class,'destroy'])->name('student.mark.destroy');

});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

