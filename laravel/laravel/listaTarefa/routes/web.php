<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TaskController;

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

//Categorias
Route::get( '/categories', [ CategoryController::class, 'index' ] ) ->middleware('auth');
Route::get( '/categories/create', [ CategoryController::class, 'create' ] );
Route::post('/categories', [CategoryController::class, 'store' ]);
Route::delete('/categories/{id}', [CategoryController::class, 'destroy' ]);
Route::get('/categories/edit/{id}', [CategoryController::class, 'edit' ]);
Route::put('/categories/update/{id}', [CategoryController::class, 'update' ]);

//Tarefas
Route::get( '/tasks', [ TaskController::class, 'index' ] );
Route::get( '/tasks/create', [ TaskController::class, 'create' ] );
Route::post( '/tasks', [TaskController::class, 'store' ]);
Route::delete( '/tasks/{id}', [TaskController::class, 'destroy' ]);
Route::get( '/tasks/edit/{id}', [TaskController::class, 'edit' ]);
Route::put( '/tasks/update/{id}', [TaskController::class, 'update' ]);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});