<?php

use Livewire\Livewire;

it('can render registration screen', function () {
    $response = $this->get('/register');

    $response->assertStatus(200);
});

it('can register new user', function () {
    $response = Livewire::test('auth.register')
        ->set('name', 'Test User')
        ->set('email', 'test@test.com')
        ->set('password', 'password')
        ->set('password_confirmation', 'password')
        ->call('register');

    $response
        ->assertHasNoErrors()
        ->assertRedirect(route('dashboard', absolute: false));

    $this->assertAuthenticated();
});
