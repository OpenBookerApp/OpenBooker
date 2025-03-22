<?php

use App\Models\User;
use Livewire\Livewire;

it('can render confirm password screen', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->get('/confirm-password');

    $response->assertStatus(200);
});

it('can confirm password', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    $response = Livewire::test('auth.confirm-password')
        ->set('password', 'password')
        ->call('confirmPassword');

    $response
        ->assertHasNoErrors()
        ->assertRedirect(route('dashboard', absolute: false));
});

it('cannot confirm password with invalid password', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    $response = Livewire::test('auth.confirm-password')
        ->set('password', 'wrong-password')
        ->call('confirmPassword');

    $response->assertHasErrors(['password']);
});
