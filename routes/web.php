<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

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
// Page
Route::get('/', [HomeController::class, "index"]);
Route::get('/about', [AboutController::class, "index"]);
Route::get('/resume', [ResumeController::class, "index"]);
Route::get('/portfolio', [PortfolioController::class, "index"]);
Route::get('/contact', [ContactController::class, "index"]);

// Backoffice
Route::get("/qsdfg$", function () {
    return view("template.second");
});

Route::get('/boNav', [HomeController::class, "boNav"]);
Route::get('/boInfo', [AboutController::class, "boInfo"]);
Route::get('/boSkills', [AboutController::class, "boSkills"]);
Route::get('/boEducation', [ResumeController::class, "boEducation"]);
Route::get('/boSummary', [ResumeController::class, "boSummary"]);
Route::get('/boExperience', [ResumeController::class, "boExperience"]);
Route::get('/boContact', [ContactController::class, "boContact"]);
Route::get('/boClient', [ContactController::class, "boClient"]);

//Social
Route::get('/edit-social/{id}', [HomeController::class, "edit"]);
Route::post('/delete-social/{id}', [HomeController::class, "destroy"]);
Route::post('/update-social/{id}', [HomeController::class, "update"]);
Route::post('/social-store', [HomeController::class, "store"]);

// Info
Route::get('/edit-info/{id}', [AboutController::class, "edit"]);
Route::post('/info-store', [AboutController::class, "store"]);
Route::post('/delete-info/{id}', [AboutController::class, "destroy"]);
Route::post('/update-info/{id}', [AboutController::class, "update"]);

// Skills
Route::get('/edit-skills/{id}', [AboutController::class, "remplacer"]);
Route::post('/skills-store', [AboutController::class, "ajouter"]);
Route::post('/delete-skills/{id}', [AboutController::class, "delete"]);
Route::post('/update-skills/{id}', [AboutController::class, "maj"]);

// Experience
Route::get('/edit-experience/{id}', [ResumeController::class, "edit"]);
Route::post('/experience-store', [ResumeController::class, "store"]);
Route::post('/delete-experience/{id}', [ResumeController::class, "destroy"]);
Route::post('/update-experience/{id}', [ResumeController::class, "update"]);

// Experience 2
Route::get('/edit-experience2/{id}', [ResumeController::class, "remplacer"]);
Route::post('/experience2-store', [ResumeController::class, "ajouter"]);
Route::post('/delete-experience2/{id}', [ResumeController::class, "delete"]);
Route::post('/update-experience2/{id}', [ResumeController::class, "maj"]);

// Summary
Route::get('/edit-summary/{id}', [ResumeController::class, "edit1"]);
Route::post('/update-summary/{id}', [ResumeController::class, "maj2"]);

// Summary 2
Route::get('/edit-summary2/{id}', [ResumeController::class, "edit2"]);
Route::post('/summary2-store', [ResumeController::class, "add"]);
Route::post('/delete-summary2/{id}', [ResumeController::class, "delete3"]);
Route::post('/update-summary2/{id}', [ResumeController::class, "maj3"]);

// Education
Route::get('/edit-education/{id}', [ResumeController::class, "edit3"]);
Route::get("/education-show/{id}", [ResumeController::class, "show"]);
Route::post('/education-store', [ResumeController::class, "add2"]);
Route::post('/delete-education/{id}', [ResumeController::class, "delete4"]);
Route::post('/update-education/{id}', [ResumeController::class, "maj4"]);

// Contact
Route::get('/edit-contact/{id}', [ContactController::class, "edit"]);
Route::post('/delete-contact/{id}', [ContactController::class, "destroy"]);
Route::post('/update-contact/{id}', [ContactController::class, "update"]);
Route::post('/contact-store', [ContactController::class, "store"]);

// Client
Route::post('/client-store', [ContactController::class, "client"]);