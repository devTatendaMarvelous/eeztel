<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\FaultsController;
use App\Http\Controllers\FeedbacksController;

Route::get('/', function () {
    return redirect('home');
});
Route::get('/reports',[FaultsController::class,'reports']
);

//===========USER PROFILES=====
route::get('/profile/{id}', [UserProfileController::class, 'index']);
route::post('/profile/{id}/edit', [UserProfileController::class, 'update']);
route::post('/profile/{id}/password', [UserProfileController::class, 'password']);
// ===========================================================================================================================
// =====================USERS======================================
Route::get('/users',[UserController::class,'getUsers']);
Route::get('/users/create',[UserController::class,'create']);
Route::post('/users/store',[UserController::class,'store']);
Route::get('/users/{id}/edit', [UserController::class, 'edit']);
Route::get('/users/{id}/delete', [UserController::class, 'deleteUser']);
route::post('/users/{id}/update', [UserController::class, 'updateUser']);
// =============================================================================================================

// ==========   JOB CARDS=================================================================================
Route::get('/cards', [CardsController::class, 'index']);
Route::get('/cards/create', [CardsController::class, 'create']);
Route::post('/cards/{id}/store', [CardsController::class, 'store']);
Route::get('/cards/{id}/delete',[CardsController::class,'destroy']);
Route::get('/cards/{id}/edit',[CardsController::class,'edit']);
Route::post('/cards/{id}/update',[CardsController::class,'update']);
// ==============================================================================================================
// =====================USERS======================================
Route::get('/employees',[EmployeesController::class,'index']);
Route::get('/employees/create',[EmployeesController::class,'create']);
Route::post('/employees/store',[EmployeesController::class,'store']);
Route::get('/employees/{id}/edit', [EmployeesController::class, 'edit']);
Route::get('/employees/{id}/delete', [EmployeesController::class, 'deleteUser']);
route::post('/employees/{id}/update', [EmployeesController::class, 'updateUser']);
// =============================================================================================================


// =====================FAULTS======================================
Route::get('/faults',[FaultsController::class,'index']);
Route::get('faults/create',[FaultsController::class,'create']);
Route::post('/faults/store',[FaultsController::class,'store']);
Route::get('/faults/{id}/edit', [FaultsController::class, 'edit']);
Route::get('/faults/{id}/delete', [FaultsController::class, 'deleteUser']);
route::post('/faults/{id}/update', [FaultsController::class, 'update']);
route::get('/faults/{id}/technician', [FaultsController::class, 'technician']);
route::post('/faults/{id}/updateTechnician', [FaultsController::class, 'updateTechnician']);
route::post('/faults/{id}/complete', [FaultsController::class, 'complete']);
route::get('/faults/{id}/clientConfirmed', [FaultsController::class, 'clientConfirmed']);
// =============================================================================================================
// =====================Feedback======================================
Route::get('/feedbacks',[FeedbacksController::class,'index']);
Route::get('/feedbacks/create',[FeedbacksController::class,'create']);
Route::post('/feedbacks/store',[FeedbacksController::class,'store']);
Route::get('/feedbacks/{id}/client', [FeedbacksController::class, 'client']);
Route::get('/feedbacks/{id}/delete', [FeedbacksController::class, 'deleteUser']);
route::post('/feedbacks/{id}/update', [FeedbacksController::class, 'updateUser']);
// =============================================================================================================


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
