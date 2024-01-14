<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BusinessAccountController;
use App\Http\Controllers\MenusController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('my-account', function () {
    return view('account.index');
})->name('my-account');

Route::get('business', function () {
    return view('business_account.layout');
});

Route::get('my-account', function () {
    return view('account.index');
})->name('my-account');

// Route::get('menu', function () {
//     return view('business_account.menu.layout');
// })->name('menu');

Route::get('breakfast', function () {
    return view('pages.breakfast');
})->name('breakfast');

Route::get('lunch', function () {
    return view('pages.lunch');
})->name('lunch');

Route::get('dinner', function () {
    return view('pages.dinner');
})->name('dinner');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::prefix('business')->group(function () {
    Route::get('/', [BusinessAccountController::class, 'post'])->name('business');
    Route::get('/green', [BusinessAccountController::class, 'green'])->name('business.green');
    Route::get('/images', [BusinessAccountController::class, 'images'])->name('business.images');
    Route::get('/info', [BusinessAccountController::class, 'info'])->name('business.info');
    Route::get('/review', [BusinessAccountController::class, 'review'])->name('business.review');
    Route::get('/videos', [BusinessAccountController::class, 'videos'])->name('business.videos');
    // Route::get('/menus', [BusinessAccountController::class, 'menus'])->name('business.menus');
    Route::group(['prefix' => 'menus'], function () {
        Route::get('/', [MenusController::class, 'starters'])->name('menus.starters');
        Route::get('/breakfast', [MenusController::class, 'breakfast'])->name('menus.breakfast');
        Route::get('/lunch', [MenusController::class, 'lunch'])->name('menus.lunch');
        Route::get('/drinks', [MenusController::class, 'drinks'])->name('menus.drinks');
        Route::get('/kiddies', [MenusController::class, 'kiddies'])->name('menus.kiddies');
        Route::get('/dessert', [MenusController::class, 'dessert'])->name('menus.dessert');
        Route::get('/promo', [MenusController::class, 'promo'])->name('menus.promo');
    });
});

// Route::group(['prefix' => 'business'], function () {
// Route::get('business', [BusinessAccountController::class, 'post'])->name('business');
// Route::get('business/green', [BusinessAccountController::class, 'green'])->name('business.green');
// Route::get('business/images', [BusinessAccountController::class, 'images'])->name('business.images');
// Route::get('business/info', [BusinessAccountController::class, 'info'])->name('business.info');
// Route::get('business/review', [BusinessAccountController::class, 'review'])->name('business.review');
// Route::get('business/videos', [BusinessAccountController::class, 'videos'])->name('business.videos');
// Route::get('business/menus', [BusinessAccountController::class, 'menu'])->name('business.menus');
// });



// Route::get('/green', [BusinessAccountController::class, 'green']);
// Route::get('/b_images', [BusinessAccountController::class, 'images']);
// Route::get('/info', [BusinessAccountController::class, 'info']);
// Route::get('/post', [BusinessAccountController::class, 'post']);
// Route::get('/review', [BusinessAccountController::class, 'review']);
// Route::get('/b_videos', [BusinessAccountController::class, 'videos']);
// Route::get('/b_menu', [BusinessAccountController::class, 'menu']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
