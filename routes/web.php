<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

// All Listings
Route::get('/', [ListingController::class, 'index']);

// Create a Listing
Route::get('/listings/create', [ListingController::class, 'create']);

// Store a Listing
Route::post('/listings', [ListingController::class, 'store']);

// Show a Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);


