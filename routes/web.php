<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AppController as adminAppController;
/*Route::get('/', function () {
    return view('welcome');
});*/

#website route

Route::get('/',[AppController::class, 'index'])->name('index');
Route::get('/about-us',[AppController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us',[AppController::class, 'contactUs'])->name('contact-us');

Route::get('/blogs',[AppController::class, 'blogs'])->name('blogs');

Route::get('/blog/{slug}',[AppController::class, 'blog'])->name('blog');


#admin route
Route::group(['prefix' => 'admin'], function(){
    Route::get('dashboard',[adminAppController::class, 'dashboard'])->name('dashboard');
    #category route
    Route::get('categories',[adminAppController::class, 'categories'])->name('categories');
    Route::get('add-category',[adminAppController::class, 'addCategory'])->name('add.category');



});