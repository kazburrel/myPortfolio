<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PorfotlioController;
use App\Mail\ContactMe;

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

// Index for the main website
Route::get('/', [ViewController::class, 'MainIndexView']);

// Route::get('email', [ViewController::class, 'EmailView']);

// Storing Contact me details
Route::post('/contact', [ContactController::class, 'StoreMesaageDetails'])->middleware('auth');

// Store for Resume Update through Admin
Route::prefix('/admin')->group(function () {
    // View For Admin Dashboard
    Route::get('/dashboard', [ViewController::class, 'AdminIndexView'])->middleware('auth');
    // dashboard details for visitors
    Route::get('/dashboard', [DashboardController::class, 'location'])->middleware('auth');

    // View for Sign up
    Route::get('/sign-up', [ViewController::class, 'SignUpView']);

    // Store Admin for Sign up
    Route::post('/sign-up', [AdminController::class, 'CreateAdmin'])->middleware('guest');

    // logout Admin
    Route::get('/logout', [AdminController::class, 'Logout'])->middleware('auth');

    // View for Sign in
    Route::get('/sign-in', [ViewController::class, 'SignInView'])
        ->name('login')
        ->middleware('guest');

    // View for Sign in
    Route::post('/authenticate', [AdminController::class, 'authenticate']);

    // View for Contact Me
    Route::get('/contact', [ViewController::class, 'ContactView'])->middleware('auth');
    // Destroy Messages
    Route::delete('/contact/{contactDets}', [ContactController::class, 'DestroyMessage'])->middleware('auth');

    // View for profile update through Admin
    Route::get('/profile', [ViewController::class, 'AdminProfileView'])->middleware('auth');
    // Store for profile details through Admin
    Route::post('/profile', [ProfileController::class, 'StoreprofileDetails'])->middleware('auth');
    // Update for profile details through Admin
    Route::put('/profile', [ProfileController::class, 'EditprofileDetails'])->middleware('auth');

    // View for Resume Update through Admin
    Route::get('/resume', [ViewController::class, 'AdminResumeView'])->middleware('auth');
    // Store for resume
    Route::post('/resume', [ResumeController::class, 'StoreResumeDetails'])->middleware('auth');
    // Edit for Resume
    Route::put('/resume/{resume}', [ResumeController::class, 'EditResumeDetails'])->middleware('auth');
    // Delete for Resume
    Route::delete('/resume/{resume}', [ResumeController::class, 'DestroyResume'])->middleware('auth');

    // View for Skills Update through Admin
    Route::get('/skills', [ViewController::class, 'AdminSkillsView'])->middleware('auth');
    // Store for Skills Update through Admin
    Route::post('/skills', [SkillsController::class, 'StoreSkillsDetails'])->middleware('auth');
    // Edit for Skills
    Route::put('/skills/{skills}', [SkillsController::class, 'EditSkillsDetails'])->middleware('auth');
    // Delete For Skills
    Route::delete('/skills/{skills}', [SkillsController::class, 'DestroySkill'])->middleware('auth');

    // Portfolio view
    Route::get('/portfolio', [ViewController::class, 'AddPortfolioView'])->middleware('auth');
    // Portfolio_Category Store
    Route::post('/portfolio', [PorfotlioController::class, 'StoreCat'])->middleware('auth');
    // Portfolio_Project Store
    Route::post('/portfolio', [PorfotlioController::class, 'StoreProject'])->middleware('auth');
    // Portfolio_Project Update
    Route::put('/portfolio/{portfolio}', [PorfotlioController::class, 'UpdateProject'])->middleware('auth');
    // Portfolio Delete
    Route::delete('/portfolio/{portfolio}', [PorfotlioController::class, 'DestroySkill'])->middleware('auth');
});
