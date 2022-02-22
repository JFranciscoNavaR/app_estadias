<?php

use App\Http\Livewire\EditUser;
use App\Http\Livewire\ShowActions;
use App\Http\Livewire\ShowCloseouts;
use App\Http\Livewire\ShowDentists;
use App\Http\Livewire\ShowTariffs;
use App\Http\Livewire\ShowUsers;
use App\Http\Livewire\ShowWeeklySchedules;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/aranceles', ShowTariffs::class)->name('showtariffs');
Route::middleware(['auth:sanctum', 'verified'])->get('/aranceles/acciones', ShowActions::class)->name('showactions');
Route::middleware(['auth:sanctum', 'verified'])->get('/odontologos', ShowDentists::class)->name('showdentists');
Route::middleware(['auth:sanctum', 'verified'])->get('/liquidaciones', ShowCloseouts::class)->name('showcloseouts');
Route::middleware(['auth:sanctum', 'verified'])->get('/usuarios', ShowUsers::class)->name('showusers');
Route::middleware(['auth:sanctum', 'verified'])->get('/usuario/id', EditUser::class)->name('edituser');
Route::middleware(['auth:sanctum', 'verified'])->get('/agenda/semanal', ShowWeeklySchedules::class)->name('showweeklyschedules');
