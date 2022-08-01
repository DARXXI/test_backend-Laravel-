<?php


use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
//use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return Inertia::render('welcome', [
//         'canLogin' => Route::has('login'),
//          'canRegister' => Route::has('register'),
//          'laravelVersion' => Application::VERSION,
//          'phpVersion' => PHP_VERSION,
//      ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', 'App\Http\Controllers\PostController@index'); 

Route::get('/films', 'App\Http\Controllers\PostController@index')->name('post.index');

Route::get('/authors', function (){
    return 'all authors';
});

Route::get('/films/create', 'App\Http\Controllers\PostController@create')->name('post.create')->middleware(['auth', 'verified']);
Route::post('/films/create', 'App\Http\Controllers\PostController@store')->name('post.store')->middleware(['auth', 'verified']);

Route::get('/films/{window}', 'App\Http\Controllers\PostController@show')->name('post.show')->middleware(['auth', 'verified']);
Route::get('/films/{window}/edit', 'App\Http\Controllers\PostController@edit')->name('post.edit')->middleware(['auth', 'verified']);
Route::patch('/films/{window}', 'App\Http\Controllers\PostController@update')->name('post.update')->middleware(['auth', 'verified']);
Route::delete('/films/{window}', 'App\Http\Controllers\PostController@destroy')->name('post.delete')->middleware(['auth', 'verified']);

Route::post('/films', 'App\Http\Controllers\ImageController@upload')->name('image.upload')->middleware(['auth', 'verified']);

// Route::post('/films', function (Request $request) {
        
//        $path = $request->file('image')->store('uploads', 'public'); 


//        return view('home', ['path' => $path]);
// })->name('image.upload');
    //     return Inertia::render('Dashboard');
    // })->middleware(['auth', 'verified'])->name('dashboard');

