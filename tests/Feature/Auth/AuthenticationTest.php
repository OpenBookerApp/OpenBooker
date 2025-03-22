<?php

use App\Models\User;
use Livewire\Livewire;

it('can render login screen', function () {
    $response = $this->get('/login');

    $response->assertStatus(200);
});

it('can authenticate user', function () {
    $user = User::factory()->create();

    $response = Livewire::test('auth.login')
        ->set('email', $user->email)
        ->set('password', 'password')
        ->call('login');

    $response
        ->assertHasNoErrors()
        ->assertRedirect(route('dashboard', absolute: false));

    $this->assertAuthenticated();
});

it('cannot authenticate user with invalid password', function () {
    $user = User::factory()->create();

    $response = Livewire::test('auth.login')
        ->set('email', $user->email)
        ->set('password', 'wrong-password')
        ->call('login');

    $response->assertHasErrors('email');

    $this->assertGuest();
});

it('can logout user', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post('/logout');

    $response->assertRedirect('/');

    $this->assertGuest();
});

it('can rate limit on multiple login attempts', function () {
    $user = User::factory()->create();

    $i = 1;
    while ($i <= 61) {
        Livewire::test('auth.login')
            ->set('email', $user->email)
            ->set('password', 'wrong-password')
            ->call('login');
        $i++;
    }

    $response = Livewire::test('auth.login')
        ->set('email', $user->email)
        ->set('password', 'password')
        ->call('login');

    $response->assertHasErrors('email');
});
