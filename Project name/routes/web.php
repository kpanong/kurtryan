<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentInfoController;
use App\Http\Controllers\EnrollSubjectsController;
use App\Http\Controllers\GradesController;
use App\Http\Controllers\BalanceController;
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



// STUDENT INFORMATION 
//STUDENT NAVIGATIONS
Route::get('/students', [studentInfoController::class, 'index']) 
   ->middleware(['auth', 'verified'])
   ->name('students');

//GO TO ADD STUDENT FORM
Route::get('/students/add', function () {
    return view('students.add');
})->middleware(['auth', 'verified'])->name('add-student');

// TO VIEW STUDENTS DATA
Route::get('/students/{stuno}', [studentInfoController::class, 'show']) 
->middleware(['auth', 'verified'])
->name('students-show');

// ADDING INFO FUNCTIONS
Route::post('/students/add',[studentInfoController::class, 'store'] )
->middleware(['auth', 'verified'])
->name('student-store');

// EDIT INFO FUNCTIONS
Route::get('/students/edit/{stuno}', [studentInfoController::class, 'edit']) 
->middleware(['auth', 'verified'])
->name('students-edit');

// UPDATE INFO FUNCTIONS
Route::patch('/students/update/{stuno}', [StudentInfoController::class, 'update']) 
->middleware(['auth', 'verified'])
->name('students-update');

// DELETE INFO FUNCTIONS
Route::delete('/students/delete/{stuno}', [StudentInfoController::class, 'destroy']) 
->middleware(['auth', 'verified'])
->name('students-delete');
//STUDENT INFORMATION



/////ENROLLED SUBJECTS 
Route::get('/enrolledsubjects', [EnrollSubjectsController::class, 'index']) 
->middleware(['auth', 'verified'])
->name('enrolledsubjects');

//GO TO ADD ENROLLED SUBJECTS FORM
Route::get('/enrolledsubjects/add', function () {
    return view('enrolledsubjects.add');
})->middleware(['auth', 'verified'])->name('add-subject');

// ADDING SUBJECT INFO FUNCTIONS
Route::post('/enrolledsubjects/add',[EnrollSubjectsController::class, 'store'] )
->middleware(['auth', 'verified'])
->name('enrolledsubjects-store');

// TO VIEW SUBJECTS DATA
Route::get('/enrolledsubjects/{Subjects}', [EnrollSubjectsController::class, 'show']) 
->middleware(['auth', 'verified'])
->name('enrolledsubjects-show');

// EDIT SUBJECT INFO FUNCTIONS
Route::get('/enrolledsubjects/edit/{Subjects}', [EnrollSubjectsController::class, 'edit']) 
->middleware(['auth', 'verified'])
->name('enrolledsubjects-edit');

// UPDATE SUBJECT INFO FUNCTIONS
Route::patch('/enrolledsubjects/update/{Subjects}', [EnrollSubjectsController::class, 'update']) 
->middleware(['auth', 'verified'])
->name('enrolledsubjects-update');

// DELETE SUBJECT INFO FUNCTIONS
Route::delete('/enrolledsubjects/delete/{Subjects}', [EnrollSubjectsController::class, 'destroy']) 
->middleware(['auth', 'verified'])
->name('enrolledsubjects-delete');
//// ENROLLED SUBJECTS 



//  GRADES 
Route::get('/grades', [GradesController::class, 'index']) 
->middleware(['auth', 'verified'])
->name('grades');

Route::get('/balances/add', [BalancesController::class, 'getStudentInfo'])
->middleware(['auth', 'verified'])
->name('add-grades');

Route::get('/grades/add', [GradesController::class, 'getSubjectInfo'])
->middleware(['auth', 'verified'])
->name('add-grades');

Route::post('/grades/add', [GradesController::class, 'store'])
->middleware(['auth', 'verified'])
->name('grades-store');

//VIEW GRADES DATA
Route::get('/grades/{Grade}', [GradesController::class, 'show']) 
->middleware(['auth', 'verified'])
->name('grades-show');

Route::get('/grades/edit/{Grade}', [GradesController::class, 'edit'])
->middleware(['auth', 'verified'])
->name('grades-edit');

Route::patch('/grades/update/{Grade}', [GradesController::class, 'update'])
->middleware(['auth', 'verified'])
->name('grades-update');

Route::delete('/grades/delete/{Grade}', [GradesController::class, 'destroy'])
->middleware(['auth', 'verified'])
->name('grades-delete');
/// GRADES 



////BALANCE 
Route::get('/balances', [BalanceController::class, 'index']) 
->middleware(['auth', 'verified'])
->name('balances');

//GET THE STUDENT INFO -- ADD BALANCE FUNCTION
Route::get('/balances/add', [BalanceController::class, 'getStudentInfo'])
->middleware(['auth', 'verified'])
->name('add-balance');
//ADD BALANCE FUNCTION
Route::post('/balances/store', [BalanceController::class, 'store'])
->middleware(['auth', 'verified'])
->name('balances-store');
//VIEW BALANCE FUNCTION
Route::get('/balances/{BalanceNo}', [BalanceController::class, 'show'])
->middleware(['auth', 'verified'])
->name('balances-show');
//DELETE FUNCTION
Route::delete('/balances/delete/{BalanceNo}', [BalanceController::class, 'destroy'])
->middleware(['auth', 'verified'])
->name('balances-delete');
// EDIT BALANCE FUNCTION
Route::get('/balances/edit/{BalanceNo}', [BalanceController::class, 'edit'])
->middleware(['auth', 'verified'])
->name('balances-edit');
// UPDATE BALANCE FUNCTION
Route::patch('/balances/update/{BalanceNo}', [BalanceController::class, 'update'])
->middleware(['auth', 'verified'])
->name('balances-update');
/////BALANCE 


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';