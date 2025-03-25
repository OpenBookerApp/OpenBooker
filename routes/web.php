<?php

use App\Livewire\App\Appointments;
use App\Livewire\App\Availabilities;
use App\Livewire\App\Contacts;
use App\Livewire\App\Services;
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

Route::prefix('app')->middleware(['auth', 'verified'])->group(function () {
    Route::name('app.')->group(function () {
        Route::get('contacts', Contacts::class)->name('contacts');
        Route::get('services', Services::class)->name('services');
        Route::get('availabilities', Availabilities::class)->name('availabilities');
        Route::get('appointments', Appointments::class)->name('appointments');
    });
});

require __DIR__ . '/auth.php';
