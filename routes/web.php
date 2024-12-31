<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;

// Home Route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Blog Routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog'); // Blog listing
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show'); // Single blog post

// About Us Route
Route::get('/about-us', [PageController::class, 'about'])->name('about');

// Category Route
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show'); // Blog posts by category

// Author Route
Route::get('/author/{slug}', [AuthorController::class, 'show'])->name('author.show'); // Blog posts by author

// Contact Route
Route::get('/contact', [PageController::class, 'contact'])->name('contact'); // Contact page
Route::post('/contact', [PageController::class, 'handleContact'])->name('contact.submit'); // Contact form submission

// Privacy Policy Route
Route::get('/privacy-policy', [PageController::class, 'privacy'])->name('privacy.policy');
