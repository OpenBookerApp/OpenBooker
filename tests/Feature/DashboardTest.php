<?php

use App\Models\User;

it('redirects guests to the login page', function () {
    $response = $this->get('/dashboard');
    $response->assertRedirect('/login');
});

it('can render dashboard screen when authenticated', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $response = $this->get('/dashboard');
    $response->assertStatus(200);
});
