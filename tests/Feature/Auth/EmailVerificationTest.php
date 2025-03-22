<?php

use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\URL;
use Livewire\Livewire;

it('can render email verification screen', function () {
    $user = User::factory()->unverified()->create();

    $response = $this->actingAs($user)->get('/verify-email');

    $response->assertStatus(200);
});

it('can send verification email', function () {
    $user = User::factory()->unverified()->create();

    $this->actingAs($user);

    $response = Livewire::test('auth.verify-email')
        ->call('sendVerification');

    $response->assertSee('A new verification link has been sent to the email address you provided during registration.');
});

it('cannot send verification email if already verified', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    $response = Livewire::test('auth.verify-email')
        ->call('sendVerification');

    $response->assertRedirect('/dashboard');
});

it('can verify email', function () {
    $user = User::factory()->unverified()->create();

    Event::fake();

    $verificationUrl = URL::temporarySignedRoute(
        'verification.verify',
        now()->addMinutes(60),
        ['id' => $user->id, 'hash' => sha1($user->email)]
    );

    $response = $this->actingAs($user)->get($verificationUrl);

    Event::assertDispatched(Verified::class);

    $this->assertTrue($user->fresh()->hasVerifiedEmail());
    $response->assertRedirect(route('dashboard', absolute: false) . '?verified=1');
});

it('cannot verify email with invalid hash', function () {
    $user = User::factory()->unverified()->create();

    $verificationUrl = URL::temporarySignedRoute(
        'verification.verify',
        now()->addMinutes(60),
        ['id' => $user->id, 'hash' => sha1('wrong-email')]
    );

    $this->actingAs($user)->get($verificationUrl);

    $this->assertFalse($user->fresh()->hasVerifiedEmail());
});

it('cannot verify email if already verified', function () {
    $user = User::factory()->create();

    $verificationUrl = URL::temporarySignedRoute(
        'verification.verify',
        now()->addMinutes(60),
        ['id' => $user->id, 'hash' => sha1($user->email)]
    );

    $response = $this->actingAs($user)->get($verificationUrl);

    $response->assertRedirect(route('dashboard', absolute: false) . '?verified=1');
});

it('can logout user if clicked logout link', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    $response = Livewire::test('auth.verify-email')
        ->call('logout');

    $response->assertRedirect('/');
    $this->assertGuest();
});
