<?php

use App\Http\Controllers\ResultsController;
use App\Http\Controllers\VotesController;
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

Route::resource('alternatives','App\Http\Controllers\AlternativesController');

Route::resource('elections','App\Http\Controllers\ElectionsController');

Route::resource('provinces','App\Http\Controllers\ProvincesController');

Route::resource('votes', VotesController::class);

// Show a particular register of a vote
Route::get('votes/{election_id}/{province_id}/{alternative_id}', [VotesController::class, 'showVote'])->name('votes.showVote');

// Delete/destroy a particular register of a vote
Route::delete('votes/{election_id}/{province_id}/{alternative_id}', [VotesController::class, 'destroy'])->name('votes.destroy-votes');

// Edit a particular register of a vote
Route::get('votes/{year}/{province_id}/{alternative_id}/edit', [VotesController::class, 'edit'])->name('votes.edit');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
