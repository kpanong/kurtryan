<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentInfoController;
use App\Models\StudentInfo;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//first route - going to stduents/index file
// Route::get('/students', function () {
//     return view('students.index');
// })->middleware(['auth', 'verified'])->name('students');

// second route - navigate to form add student
Route::get('/students/add', function () {
    return view('students.add');
})->middleware(['auth', 'verified'])->name('add-student');

//third route - store student info to create function under studentInfoController
Route::post('/students/add', [studentInfoController::class, 'store'])
->middleware(['auth', 'verified'])
->name('student-store');

//fourth route - get all data from student info table

Route::get('/students',[studentInfoController::class, 'index'])
->middleware(['auth', 'verified'])
->name('students');

//fifth - view individually info

Route::get('/students/{stuno}',[studentInfoController::class, 'show'])
->middleware(['auth', 'verified'])
->name('students-show');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
