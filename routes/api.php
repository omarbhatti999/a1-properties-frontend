<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/




Route::get('/areas', [ApiController::class, 'areasList']);
Route::get('/home', [ApiController::class, 'getAll']);

Route::get('/areas', [ApiController::class, 'areasList']);
Route::get('/areas/featured', [ApiController::class, 'areasListFeatured']);
Route::get('/areas/{slug}', [ApiController::class, 'getArea']);
Route::get('/developers', [ApiController::class, 'developersList']);
Route::get('/developments', [ApiController::class, 'developmentsList']);
Route::get('/featured-developments', [ApiController::class, 'developmentsListFeatured']);
Route::get('/listings', [ApiController::class, 'propertiesListings']);
Route::get('/listings/{slug}', [ApiController::class, 'getProperty']);
Route::get('/developments/{slug}', [ApiController::class, 'getDevelopment']);
Route::get('/listings/all/{params}', [ApiController::class, 'getPropertiesByParams']);
Route::get('/properties/commercial', [ApiController::class, 'propertiesListCommercial']);
Route::get('/team/all/{params}', [ApiController::class, 'getTeam']);
Route::get('/team/{slug}', [ApiController::class, 'getTeamMemberData']);
Route::get('/blogs', [ApiController::class, 'blogs']);
Route::get('/featured-blogs', [ApiController::class, 'featuredBlogs']);
Route::get('/blogs/{slug}', [ApiController::class, 'getBlogBySlug']);

Route::post('lead-request', [ApiController::class, 'leadRequest']);

//propspace urls
Route::post('propspace', 'App\Http\Controllers\ApiController@sendRequest');
Route::post('meta', 'App\Http\Controllers\ApiController@metaRequest');
Route::post('test', 'App\Http\Controllers\ApiController@sendData');




