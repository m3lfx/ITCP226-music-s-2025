<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\UserController;

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

// Route::get('/example', function () {
//     return "hello world" ;
// });

// Route::get('/books/{genre}', function ($genre) {
//     return "Books in the {$genre} category.";
//     });
// Route::get('/books/{id}', function ($id) {
// return "Book id {$id} category.";
// });

// Route::get('/books/{genre?}', function ($genre = 'crime') {
//     if ($genre == null) {
//     return 'Books index.';
//     }
//     return "Books in the {$genre} category.";
//    });
// Route::get('/first', function () {
//     return Redirect::to('/second');
// });
Route::get('/example', function () {
    // $data['something'] = 'Red Panda';
    $data['manyThings'] = array('one', 'two', 'three', 'five');
    return View::make('example', $data);
});

Route::get('file/download', function () {
    $file = 'C:\Users\rommel dalisay\Desktop\2T-2025-att.txt';
    return Response::download($file);
});

// Route::get('/second', function () {
//     return 'Second route.';
// });


// Route::get('/home', function () {
//     return view('home');
// });

Route::view('/home', 'home');

Route::get('/second', function () {
    return Redirect::route('calendar');
});
Route::get(
    '/my/calendar',
    function () {
        return View::make('calendar');
    }
)->name('calendar');

// Route::get('/save/{princess}', function ($princess) {
//     return "Sorry, {$princess} is in another castle. :(";
//     })->where('princess', '[A-Za-z]+');
Route::get('save/{princess}/{unicorn}', function ($princess, $unicorn) {
    return "{$princess} loves {$unicorn}";
})->where('princess', '[A-Za-z]+')
    ->where('unicorn', '[0-9]+');



Route::get('/artists', [ArtistController::class, 'index'])->name('artist.index');

// Route::get('/artists/create', [ArtistController::class, 'create'])->name('artist.create');
// Route::get('/artists/edit', [ArtistController::class, 'edit'])->name('artist.edit');
// Route::get('/artists/update', [ArtistController::class, 'update'])->name('artist.update');
// Route::get('/artists/delete', [ArtistController::class, 'edit'])->name('artist.delete');

Route::prefix('artists')->group(function () {
    Route::get('/create', [ArtistController::class, 'create'])->name('artist.create');
    Route::post('/store', [ArtistController::class, 'store'])->name('artist.store');

    Route::get('/edit/{id}', [ArtistController::class, 'edit'])->name('artist.edit');
    Route::post('/update/{id}', [ArtistController::class, 'update'])->name('artist.update');
    Route::get('/delete/{id}', [ArtistController::class, 'delete'])->name('artist.delete');
});

Route::view('/register', 'user.register');
Route::post('/user/register', [UserController::class, 'register'])->name('user.register'); 
Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');
Route::resource('albums', AlbumController::class);
