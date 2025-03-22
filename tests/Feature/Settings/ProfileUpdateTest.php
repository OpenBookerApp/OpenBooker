<?php

use App\Models\User;
use Livewire\Livewire;

it('can render profile screen', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    $this->get('/settings/profile')->assertOk();
});

it('can update profile information', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    $response = Livewire::test('settings.profile')
        ->set('name', 'Test User')
        ->set('email', 'test@example.com')
        ->call('updateProfileInformation');

    $response->assertHasNoErrors();

    $user->refresh();

    $this->assertEquals('Test User', $user->name);
    $this->assertEquals('test@example.com', $user->email);
    $this->assertNull($user->email_verified_at);
});

it('does not change verification status when email address is unchanged', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    $response = Livewire::test('settings.profile')
        ->set('name', 'Test User')
        ->set('email', $user->email)
        ->call('updateProfileInformation');

    $response->assertHasNoErrors();

    $this->assertNotNull($user->email_verified_at);
});

it('can delete user account', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    $response = Livewire::test('settings.delete-user-form')
        ->set('password', 'password')
        ->call('deleteUser');

    $response
        ->assertHasNoErrors()
        ->assertRedirect('/');

    $this->assertNull($user->fresh());
    $this->assertFalse(auth()->check());
});

it('cannot delete user account with invalid password', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    $response = Livewire::test('settings.delete-user-form')
        ->set('password', 'wrong-password')
        ->call('deleteUser');

    $response->assertHasErrors(['password']);

    $this->assertNotNull($user->fresh());
});

it('can request to resend email verification', function () {
    $user = User::factory()->unverified()->create();

    $this->actingAs($user);

    $response = Livewire::test('settings.profile')
        ->call('resendVerificationNotification');

    $response->assertSee('A new verification link has been sent to your email address.');
});

it('cannot request to resend email verification if already verified', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    $response = Livewire::test('settings.profile')
        ->call('resendVerificationNotification');

    $response->assertRedirect(route('dashboard'));
});
