<?php

use App\Http\Controllers\WebSite\WebSiteController;
use Illuminate\Support\Facades\Route;


Route::get('/alumni', [WebSiteController::class, 'alumni'])->name('alumni');
Route::get('/apply-now', [WebSiteController::class, 'apply_now'])->name('apply-now');
Route::get('/campus-life', [WebSiteController::class, 'campus_life'])->name('campus-life');
Route::get('/contacts', [WebSiteController::class, 'contacts'])->name('contacts');
Route::get('/current-students', [WebSiteController::class, 'current_students'])->name('current-students');
Route::get('/events', [WebSiteController::class, 'events'])->name('events');
Route::get('/faculty-and-staff', [WebSiteController::class, 'faculty_and_staff'])->name('faculty-and-staff');
Route::get('/future-students', [WebSiteController::class, 'future_students'])->name('future-students');
Route::get('/help', [WebSiteController::class, 'help'])->name('help');
Route::get('/programs', [WebSiteController::class, 'programs'])->name('programs');
Route::get('/research', [WebSiteController::class, 'research'])->name('research');
Route::get('/signin', [WebSiteController::class, 'signin'])->name('signin');
Route::get('/other', [WebSiteController::class, 'other'])->name('other');
