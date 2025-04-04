<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


/* Home controller */
Route::get('/', [HomeController::class, 'home']);

/**
 * Child Form route
 */
Route::get('/addInformation', [HomeController::class, 'goto_add_info']);
Route::post('/addInformation/submitform', [HomeController::class, 'add_info'])->name('childStudentInfo_submit');



/**
 * Child DB Table viewer
 */
Route::get('/showChildStudent', [HomeController::class, 'show_child_students']);
