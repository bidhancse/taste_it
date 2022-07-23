<?php

use Illuminate\Support\Facades\Route;


// Auth Area .... //
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Frontend Area .... //
Route::get('/', [App\Http\Controllers\Frontend\IndexController::class, 'index'])->name('/');
Route::get('About-Us', [App\Http\Controllers\Frontend\IndexController::class, 'about'])->name('About-Us');
Route::get('Chef', [App\Http\Controllers\Frontend\IndexController::class, 'chef'])->name('Chef');
Route::get('Menu', [App\Http\Controllers\Frontend\IndexController::class, 'menu'])->name('Menu');
Route::get('Reservation', [App\Http\Controllers\Frontend\IndexController::class, 'reservation'])->name('Reservation');
Route::get('Contact-Us', [App\Http\Controllers\Frontend\IndexController::class, 'contact'])->name('Contact-Us');
Route::Post('table_book', [App\Http\Controllers\Frontend\IndexController::class, 'tablebook'])->name('table_book');
Route::Post('customer_message', [App\Http\Controllers\Frontend\IndexController::class, 'customermessage'])->name('customer_message');




// Backend Area .... //

Route::get('/dashboard', function () {
    return view('dashboard.home');
});


// User .... //
Route::get('/dashboard/user', [App\Http\Controllers\Backend\AdminController::class, 'user'])->name('user');
Route::get('/dashboard/manage-user', [App\Http\Controllers\Backend\AdminController::class, 'manageuser'])->name('manage-user');
Route::post('createuser', [App\Http\Controllers\Backend\AdminController::class, 'createuser'])->name('createuser');
Route::get('changestatus/{id}', [App\Http\Controllers\Backend\AdminController::class, 'changestatus'])->name('changestatus');
Route::get('userdelete/{id}', [App\Http\Controllers\Backend\AdminController::class, 'userdelete'])->name('userdelete');
Route::get('edituser/{id}', [App\Http\Controllers\Backend\AdminController::class, 'edituser'])->name('edituser');
Route::post('updateuser/{id}', [App\Http\Controllers\Backend\AdminController::class, 'updateuser'])->name('updateuser');


// Slider .... //
Route::get('/dashboard/slider', [App\Http\Controllers\Backend\SliderController::class, 'slider'])->name('slider');
Route::get('/dashboard/manage-slider', [App\Http\Controllers\Backend\SliderController::class, 'manageslider'])->name('manage-slider');
Route::post('sliderinsert', [App\Http\Controllers\Backend\SliderController::class, 'sliderinsert'])->name('sliderinsert');
Route::get('sliderdelete/{id}', [App\Http\Controllers\Backend\SliderController::class, 'sliderdelete'])->name('sliderdelete');
Route::get('editslider/{id}', [App\Http\Controllers\Backend\SliderController::class, 'editslider'])->name('editslider');
Route::post('updateslider/{id}', [App\Http\Controllers\Backend\SliderController::class, 'updateslider'])->name('updateslider');


// About .... //
Route::get('/dashboard/about', [App\Http\Controllers\Backend\AboutController::class, 'about'])->name('about');
Route::post('updateabout/{id}', [App\Http\Controllers\Backend\AboutController::class, 'updateabout'])->name('updateabout');


// Menu .... //
Route::get('/dashboard/menu', [App\Http\Controllers\Backend\MenuController::class, 'menu'])->name('menu');
Route::get('/dashboard/manage-menu', [App\Http\Controllers\Backend\MenuController::class, 'managemenu'])->name('manage-menu');
Route::post('menuinsert', [App\Http\Controllers\Backend\MenuController::class, 'menuinsert'])->name('menuinsert');
Route::get('menudelete/{id}', [App\Http\Controllers\Backend\MenuController::class, 'menudelete'])->name('menudelete');
Route::get('editmenu/{id}', [App\Http\Controllers\Backend\MenuController::class, 'editmenu'])->name('editmenu');
Route::post('updatemenu/{id}', [App\Http\Controllers\Backend\MenuController::class, 'updatemenu'])->name('updatemenu');


// Chef .... //
Route::get('/dashboard/chef', [App\Http\Controllers\Backend\ChefController::class, 'chef'])->name('chef');
Route::get('/dashboard/manage-chef', [App\Http\Controllers\Backend\ChefController::class, 'managechef'])->name('manage-chef');
Route::post('chefinsert', [App\Http\Controllers\Backend\ChefController::class, 'chefinsert'])->name('chefinsert');
Route::get('chefdelete/{id}', [App\Http\Controllers\Backend\ChefController::class, 'chefdelete'])->name('chefdelete');
Route::get('editchef/{id}', [App\Http\Controllers\Backend\ChefController::class, 'editchef'])->name('editchef');
Route::post('updatechef/{id}', [App\Http\Controllers\Backend\ChefController::class, 'updatechef'])->name('updatechef');


// Reservation .... //
Route::get('/dashboard/reservation', [App\Http\Controllers\Backend\ReservationController::class, 'reservation'])->name('reservation');
Route::get('reservationdelete/{id}', [App\Http\Controllers\Backend\ReservationController::class, 'reservationdelete'])->name('reservationdelete');


// Message .... //
Route::get('/dashboard/message', [App\Http\Controllers\Backend\MessageController::class, 'message'])->name('message');
Route::get('messagedelete/{id}', [App\Http\Controllers\Backend\MessageController::class, 'messagedelete'])->name('messagedelete');

// Website Settings .... //
Route::get('/dashboard/settings', [App\Http\Controllers\Backend\WebsiteSettingsController::class, 'settings'])->name('settings');
Route::post('settingsupdate/{id}', [App\Http\Controllers\Backend\WebsiteSettingsController::class, 'settingsupdate'])->name('settingsupdate');
Route::get('/dashboard/contact-Us', [App\Http\Controllers\Backend\WebsiteSettingsController::class, 'contact'])->name('contact-Us');
Route::post('contactupdate/{id}', [App\Http\Controllers\Backend\WebsiteSettingsController::class, 'contactupdate'])->name('contactupdate');
