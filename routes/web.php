<?php

use App\Http\Controllers\ProfileController;
use App\Notifications\PushNotification;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/auth', function () {
    return view('auth');
})->middleware(['auth', 'verified'])->name('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Storing push subscription to the database
Route::post("/push-subscriptions", function (Request $request) {
    $request->validate([
        'endpoint' => 'required',
        'keys.auth' => 'required',
        'keys.p256dh' => 'required'
    ]);
    Auth::user()->updatePushSubscription($request->endpoint, $request->keys['p256dh'], $request->keys['auth']);
    return response()->json(['success' => true], 200);
})->middleware("auth");
