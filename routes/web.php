<?php

use App\Models\SalaryFormula;
use App\Models\SalarySlip;
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

require __DIR__ . '/auth.php';
require __DIR__ . '/dashboard.php';
require __DIR__ . '/employee.php';

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Events\Dispatcher;

Route::get('/getScheduleCommands', function () {
    new \App\Console\Kernel(app(), new Dispatcher());
    $schedule = app(Schedule::class);
    dd($schedule->events());

    // return $scheduledCommands;
});


Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::middleware(['auth', 'can:is-admin'])->group(function () {
    Route::get('/dashboard/employees/{id}', function () {
        return redirect()->route('dashboard.employees.index');
    });

    Route::get('/dashboard/generate-slip', function () {
        return redirect()->route('dashboard.employee-salaries.index');
    });
});



Route::get('/dashboard', function () {
    return view('dashboard', [
        'name' => auth()->user()->name
    ]);
})->middleware(['auth'])->name('dashboard');
