<?php

use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;

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
    return view('auth.login');
})->name('login');

Route::controller(AuthController::class)->group(function(){
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/password', 'passwordCreate')->name('forgot.password');
    Route::post('/password/reset', 'passwordReset')->name('password.reset');
});

Route::get('/send-email', function () {
    $details = [
        'title' => 'Test Email',
        'body' => 'This is a test email sent from Laravel using Gmail SMTP.'
    ];

    Mail::to('saikathosen444@gmail.com')->send(new TestEmail($details));

    return 'Email sent successfully!';
});

Route::middleware(['auth', 'user.status'])->group(function(){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::controller(ClientController::class)->group(function(){
        Route::get('/client/list', 'index')->name('client.list');
        Route::get('/pdf/list', 'pdfIndex')->name('pdf.list');
        Route::get('/create', 'create')->name('create');
        Route::post('/client/edit', 'update')->name('client.edit');
        Route::post('/client/store', 'store')->name('client.store');
        Route::get('/edit/{id}', 'show')->name('edit');
        Route::get('/show/{id}', 'clientView')->name('show');
        Route::get('/pdf/delete/{id}', 'destroy');
        Route::get('/client/delete/{id}', 'clientDestroy');
    });

    Route::controller(PdfController::class)->group(function(){
        Route::get('/generate/pdf/{id}', 'generatePdf')->name('generate.pdf');
        Route::get('/pdf/{id}', 'pdf')->name('pdf');
        Route::get('load/pdf/{id}', 'pdfShow')->name('pdf.load');
        Route::get('/generate/print/{id}', 'generatePrint')->name('generate.print');
    });


    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});


