<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//PageControl

Route::get('/', [PageController::class,'index'])->name('welcome');
Route::get('/events', [PageController::class,'events'])->name('events');
Route::get('/events/details/{id}', [PageController::class,'events_detail'])->name('events.details');

//CategoryRoutes
Route::get('/entertainment/events' , [CategoryController::class, 'entertainment'])->name('entertainment');
Route::get('/business_and_professional/events' , [CategoryController::class, 'business_and_professional'])->name('business_and_professional');
Route::get('/community_and_culture/events' , [CategoryController::class, 'community_and_culture'])->name('community_and_culture');
Route::get('/education/events' , [CategoryController::class, 'education'])->name('education');
Route::get('/technology/events' , [CategoryController::class, 'technology'])->name('technology');
Route::get('/health_and_wellness/events' , [CategoryController::class, 'health_and_wellness'])->name('health_and_wellness');
Route::get('/others/events' , [CategoryController::class, 'others'])->name('others');



//Organizer Routes
Route::middleware(['auth', 'verified', 'organizer'])->group(function () {

    Route::get('/organizer/dashboard', [EventController::class,'index'])->name('organizer.dashboard');
    Route::get('/organizer/dashboard/create',[EventController::class,'create'])->name('organizer.create');
    Route::post('/organizer/dashboard/create' ,[EventController::class,'store'])->name('organizer.store');
    Route::get('/organizer/dashboard/{id}/edit' ,[EventController::class,'edit'])->name('organizer.update');
    Route::put('/organizer/dashboard/{id}/edit' ,[EventController::class,'put'])->name('organizer.put');
    Route::delete('/organizer/dashboard/{id}/delete' ,[EventController::class,'delete'])->name('organizer.delete');
});


//UserRoute
Route::get('/user/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth', 'verified', 'user'])->name('user.dashboard');


//Admin Route
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified', 'admin'])->name('admin.dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
