<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestResultsController;

Route::get('/get-highest-test-id', [TestResultsController::class, 'getHighestTestId']);
Route::post('/submit-test-result', [TestResultsController::class, 'submitTestResult'])->name('submit-test-result');


Route::get('/', function () {
    return view('welcome');
});
