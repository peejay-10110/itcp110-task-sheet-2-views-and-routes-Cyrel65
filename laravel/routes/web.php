<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;



// Route 1: Home
Route::get('/', [PortfolioController::class, 'home'])->name('home');

// Route 2: About / Personal Details
Route::get('/about', [PortfolioController::class, 'about'])->name('about');

// Route 3: Hobbies
Route::get('/hobbies', [PortfolioController::class, 'hobbies'])->name('hobbies');

// Route 4: Skills
Route::get('/skills', [PortfolioController::class, 'skills'])->name('skills');

// Route 5: Education / Schools
Route::get('/education', [PortfolioController::class, 'education'])->name('education');

// Route 6: Achievements
Route::get('/achievements', [PortfolioController::class, 'achievements'])->name('achievements');

// Route 7: Projects
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');

// Route 8: Experience
Route::get('/experience', [PortfolioController::class, 'experience'])->name('experience');

// Route 9: Aspiration
Route::get('/aspiration', [PortfolioController::class, 'aspiration'])->name('aspiration');

// Route 10: Contact
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
