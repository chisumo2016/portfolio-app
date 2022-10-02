<?php

use App\Http\Controllers\API\AboutController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\EducationController;
use App\Http\Controllers\API\ExperienceController;
use App\Http\Controllers\API\ProjectController;
use App\Http\Controllers\API\ServiceController;
use App\Http\Controllers\API\SkillController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AuthController::class)->group(function (){
    Route::post('register','register');
    Route::post('login',   'login');

});

Route::controller(AboutController::class)->group(function(){

    Route::get('edit_about', 'edit_about');
    Route::post('update_about/{id}', 'update_about');
});

Route::controller(ServiceController::class)->group(function(){

    Route::get('display_all_service', 'index');
    Route::post('create_service', 'create');
    Route::post('update_service/{id}', 'update');
    Route::get('/delete_service/{id}', 'delete');

});

Route::controller(SkillController::class)->group(function (){
    Route::get('display_all_skill','index');
    Route::post('create_skill','create');
    Route::post('update_skill/{id}','update');
    Route::get('delete_skill/{id}','delete');
});

Route::controller(EducationController::class)->group(function (){
    Route::get('display_all_education','index');
    Route::post('create_education','create');
    Route::post('update_education/{id}','update');
    Route::get('delete_education/{id}','delete');

});
Route::controller(ExperienceController::class)->group(function (){
    Route::get('display_all_experience','index');
    Route::post('create_experience','create');
    Route::post('update_experience/{id}','update');
    Route::get('delete_experience/{id}','delete');
});


Route::controller(ProjectController::class)->group(function (){
    Route::get('display_all_project','index');
    Route::post('create_project','create');
    Route::post('update_project/{id}','update');
    Route::get('delete_project/{id}','delete');
});



