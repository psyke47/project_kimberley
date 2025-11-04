<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SubscriptionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/careers', function () {
    return view('careers');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/asset-tracking', function () {
    return view('asset-tracking');
});

Route::get('/prototyping', function () {
    return view('prototyping');
});

Route::get('/success-stories', function () {
    return view('success-stories');
});

Route::get('/manufacturing', function () {
    return view('manufacturing');
});

Route::get('/mining-oil-gas', function () {
    return view('mining-oil-gas');
});

Route::get('/smart-farming', function () {
    return view('smart-farming');
});

Route::get('/smart-home', function () {
    return view('smart-home');
});

Route::get('/blog/energy-in-iot', function () {
    return view('blog/energy-in-iot');
});

Route::get('/blog/healthcare-iot', function () {
    return view('blog/healthcare-iot');
});

Route::get('/blog/iot-mining', function () {
    return view('blog/iot-mining');
});

Route::get('/blog/radar-system', function () {
    return view('blog/radar-system');
});

Route::get('/blog/smart-bulb', function () {
    return view('blog/smart-bulb');
});
Route::get('/blog/smoke-detector', function () {
    return view('blog/smoke-detector');
});
Route::get('/blog/bluetooth-speaker', function () {
    return view('blog/bluetooth-speaker');
});

Route::get('/blog/youth-unemployment', function () {
    return view('blog/youth-unemployment');
});


// Blog landing page
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
// Dynamic blog posts
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Static blog pages (like your energy-in-iot page)
Route::get('/blog/energy-in-iot', [BlogController::class, 'energyInIoT'])->name('blog.energy-in-iot');

// New static blog page for healthcare IoT
Route::get('/blog/healthcare-iot', [BlogController::class, 'healthcareIoT'])->name('blog.healthcare-iot');

// New static blog page for IoT in Mining
Route::get('/blog/iot-mining', [BlogController::class, 'iotMining'])->name('blog.iot-mining');

// New static blog page for Radar System
Route::get('/blog/radar-system', [BlogController::class, 'radarSystem'])->name('blog.radar-system');

// New static blog page for Smart Bulb
Route::get('/blog/smart-bulb', [BlogController::class, 'smartBulb'])->name('blog.smart-bulb');

// New static blog page for Smoke Detector
Route::get('/blog/smoke-detector', [BlogController::class, 'smokeDetector'])->name('blog.smoke-detector');

// New static blog page for Bluetooth Speaker
Route::get('/blog/bluetooth-speaker', [BlogController::class, 'bluetoothSpeaker'])->name('blog.bluetooth-speaker');

// New static blog page for Youth Unemployment
Route::get('/blog/youth-unemployment', [BlogController::class, 'youthUnemployment'])->name('blog.youth-unemployment');

// Comments
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

//Newsletter subscription
Route::post('/subscribe', [SubscriptionController::class, 'store'])->name('subscribe');


