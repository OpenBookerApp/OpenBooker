<?php

use App\Livewire\Admin\Customers\Create;
use App\Livewire\Admin\Customers\Index;
use App\Livewire\Admin\Customers\Show;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::name('admin.')->group(function () {
        Route::name('customers.')->group(function () {
            Route::get('customers', Index::class)->name('index');
            Route::get('customers/create', Create::class)->name('create');
            Route::get('customers/{customer}', Show::class)->name('show');
        });
    });
});

require __DIR__ . '/auth.php';
