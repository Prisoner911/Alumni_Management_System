<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


/* Home controller */
Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/addInformation', [HomeController::class, 'goto_add_info']);
Route::post('/addInformation/submitform', [HomeController::class, 'add_info'])->name('StudentInfo_submit');


//Students Routes
Route::get('/showStudents', [HomeController::class, 'show_students'])->name('show_students');

Route::get('/showStudents/details/{id}', [HomeController::class, 'show_students_details'])->name('show_details');
Route::post('/showStudents/details', [HomeController::class, 'update_students_details'])->name('update_details');

Route::get('/showStudents/search', [HomeController::class, 'search_student'])->name('search_student');


//Alumni Routes
Route::get('/showAlumni', [HomeController::class, 'show_alumni'])->name('show_alumni');

Route::get('/showAlumni/search', [HomeController::class, 'search_alumni'])->name('search_alumni');


