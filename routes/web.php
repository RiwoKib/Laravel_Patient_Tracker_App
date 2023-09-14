<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramController; 

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
//     return view('programs',[
//         'heading' => 'Latest Programs',
//         'programs' => Program::all()
//     ]);
// });


Route::post('/addusers', [ProgramController::class, 'addUsers']);

Route::get('/programs/{program}', [ProgramController::class, 'show']);


Route::get('/', function(){
    return view('auth/login');
});

Route::get('/home', [HomeController::class, 'redirect']); 



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
