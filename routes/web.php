<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\AdminVehicleController;
use App\Http\Controllers\AdminPeopleController;
use App\Http\Controllers\AdminTownController;
use App\Http\Controllers\AdminBarangayController;
use App\Http\Controllers\AdminOwnerController;
use App\Http\Controllers\HomePageController;
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
/** 
Route::get('/', function () {
    return view('home');
});
*/
Route::get('/', [App\Http\Controllers\BlogController::class, 'index'])->name('home.index');

Route::get('/blogs/{blog}', [App\Http\Controllers\BlogController::class, 'show'])->name('home.show');

Route::post('/blogs/{blog}', [App\Http\Controllers\CommentController::class, 'store'])->name('home.comment.store');
Route::get('/about',[HomePageController::class, 'aboutindex'])->name('layouts.about');
Route::get('/contactus',[HomePageController::class, 'contactus'])->name('layouts.contactus');
Auth::routes(['register' => true ]);


Route::middleware(['active'])->group(function () {

    Route::get('/admin', [HomeController::class, 'index'])->name('admin.index');

    Route::get('/admin/blogs', [AdminBlogController::class, 'index'])->name('admin.blogs.index');
    Route::get('/admin/blogs/create', [AdminBlogController::class, 'create'])->name('admin.blogs.create');
    Route::post('/admin/blogs', [AdminBlogController::class, 'store'])->name('admin.blogs.store');
    Route::get('/admin/blogs/{blog}', [AdminBlogController::class, 'modify'])->name('admin.blogs.modify');
    Route::put('/admin/blogs/{blog}', [AdminBlogController::class, 'update'])->name('admin.blogs.update');
    Route::get('/admin/blogs/{blog}/delete', [AdminBlogController::class, 'delete'])->name('admin.blogs.delete');
    Route::delete('/admin/blogs/{blog}', [AdminBlogController::class, 'destroy'])->name('admin.blogs.destroy');
    

    Route::middleware(['admin'])->group(function () {
        Route::get('/admin/users', [AdminUserController::class, 'index'])->name('admin.users.index');
        Route::get('/admin/users/create', [AdminUserController::class, 'create'])->name('admin.users.create');
        Route::post('/admin/users', [AdminUserController::class, 'store'])->name('admin.users.store');
        Route::get('/admin/users/{user}', [AdminUserController::class, 'modify'])->name('admin.users.modify');
        Route::put('/admin/users/{user}', [AdminUserController::class, 'update'])->name('admin.users.update');
        Route::get('/admin/users/{user}/delete', [AdminUserController::class, 'delete'])->name('admin.users.delete');
        Route::delete('/admin/users/{user}', [AdminUserController::class, 'destroy'])->name('admin.users.destroy');
        Route::get('/admin/users/{user}/reset', [AdminUserController::class, 'reset'])->name('admin.users.reset');
        Route::patch('/admin/users/{user}', [AdminUserController::class, 'resetOk'])->name('admin.users.resetOk');

        Route::get('/admin/vehicles/create', [AdminVehicleController::class, 'create'])->name('admin.vehicles.create');
        Route::get('/admin/vehicles/{vehicle}', [AdminVehicleController::class, 'modify'])->name('admin.vehicles.modify');
        Route::put('/admin/vehicles/{vehicle}', [AdminVehicleController::class, 'update'])->name('admin.vehicles.update');
        Route::get('/admin/vehicles/{vehicle}/delete', [AdminVehicleController::class, 'delete'])->name('admin.vehicles.delete');
        Route::delete('/admin/vehicles/{vehicle}', [AdminVehicleController::class, 'destroy'])->name('admin.vehicles.destroy');

        Route::get('/admin/people/create', [AdminPeopleController::class, 'create'])->name('admin.people.create');
        Route::get('/admin/people/{people}', [AdminPeopleController::class, 'modify'])->name('admin.people.modify');
        Route::put('/admin/people/{people}', [AdminPeopleController::class, 'update'])->name('admin.people.update');
        Route::get('/admin/people/{people}/delete', [AdminPeopleController::class, 'delete'])->name('admin.people.delete');
        Route::delete('/admin/people/{people}', [AdminPeopleController::class, 'destroy'])->name('admin.people.destroy');

        Route::get('/admin/towns/create', [AdminTownController::class, 'create'])->name('admin.towns.create');
        Route::get('/admin/towns/{town}', [AdminTownController::class, 'modify'])->name('admin.towns.modify');
        Route::put('/admin/towns/{town}', [AdminTownController::class, 'update'])->name('admin.towns.update');
        Route::get('/admin/towns/{town}/delete', [AdminTownController::class, 'delete'])->name('admin.towns.delete');
        Route::delete('/admin/towns/{town}', [AdminTownController::class, 'destroy'])->name('admin.towns.destroy');

        Route::get('/admin/towns/create', [AdminTownController::class, 'create'])->name('admin.towns.create');
        Route::get('/admin/towns/{town}', [AdminTownController::class, 'modify'])->name('admin.towns.modify');
        Route::put('/admin/towns/{town}', [AdminTownController::class, 'update'])->name('admin.towns.update');
        Route::get('/admin/towns/{town}/delete', [AdminTownController::class, 'delete'])->name('admin.towns.delete');
        Route::delete('/admin/towns/{town}', [AdminTownController::class, 'destroy'])->name('admin.towns.destroy');    

        Route::get('/admin/barangays/create', [AdminBarangayController::class, 'create'])->name('admin.barangays.create');
        Route::get('/admin/barangays/{barangay}', [AdminBarangayController::class, 'modify'])->name('admin.barangays.modify');
        Route::put('/admin/barangays/{barangay}', [AdminBarangayController::class, 'update'])->name('admin.barangays.update');
        Route::get('/admin/barangays/{barangay}/delete', [AdminBarangayController::class, 'delete'])->name('admin.barangays.delete');
        Route::delete('/admin/barangays/{barangay}', [AdminBarangayController::class, 'destroy'])->name('admin.barangays.destroy');    

        Route::get('/admin/owners/create', [AdminOwnerController::class, 'create'])->name('admin.owners.create');
        Route::get('/admin/owners/{owner}', [AdminOwnerController::class, 'modify'])->name('admin.owners.modify');
        Route::put('/admin/owners/{owner}', [AdminOwnerController::class, 'update'])->name('admin.owners.update');
        Route::get('/admin/owners/{owner}/delete', [AdminOwnerController::class, 'delete'])->name('admin.owners.delete');
        Route::delete('/admin/owners/{owner}', [AdminOwnerController::class, 'destroy'])->name('admin.owners.destroy');

        //Vehicles
    Route::get('/admin/vehicles', [AdminVehicleController::class, 'index'])->name('admin.vehicles.index');
    Route::post('/admin/vehicles', [AdminVehicleController::class, 'store'])->name('admin.vehicles.store');
    
    //People
    Route::get('/admin/people', [AdminPeopleController::class, 'index'])->name('admin.people.index');
    Route::post('/admin/people', [AdminPeopleController::class, 'store'])->name('admin.people.store');
    
    //Towns
    Route::get('/admin/towns', [AdminTownController::class, 'index'])->name('admin.towns.index');
    Route::post('/admin/towns', [AdminTownController::class, 'store'])->name('admin.towns.store');
    
    //Barangay
    Route::get('/admin/barangays', [AdminBarangayController::class, 'index'])->name('admin.barangays.index');
    Route::post('/admin/barangays', [AdminBarangayController::class, 'store'])->name('admin.barangays.store');
    });

    
    
    //Owners
    Route::get('/admin/owners', [AdminOwnerController::class, 'index'])->name('admin.owners.index');
    Route::post('/admin/owners', [AdminOwnerController::class, 'store'])->name('admin.owners.store');
   
    
    Route::get('/admin/auth', [AdminAuthController::class, 'index'])->name('admin.auth.index');
    Route::put('/admin/auth', [AdminAuthController::class, 'changePassword'])->name('admin.auth.changePassword');
    Route::get('/admin/comments', [App\Http\Controllers\AdminCommentController::class, 'index'])->name('admin.comments.index');
    Route::get('/comments/{comment}', [App\Http\Controllers\AdminCommentController::class, 'show'])->name('admin.comments.show');
    Route::get('/admin/comments/{comment}/delete', [App\Http\Controllers\AdminCommentController::class, 'delete'])->name('admin.comments.delete');
    Route::delete('/admin/comments/{comment}', [App\Http\Controllers\AdminCommentController::class, 'destroy'])->name('admin.comments.destroy');
});