<?php

use App\Models\User;

beforeEach(function () {
    $this->user = User::factory()->create();
});

it('can render appointments screen', function () {
    $this->actingAs($this->user);

    $response = $this->get(route('app.appointments'))
        ->assertSeeLivewire('app.appointments');

    $response->assertStatus(200);
});

it('cannot render appointments screen if guest', function () {
    $response = $this->get(route('app.appointments'));

    $response->assertRedirect(route('login'));
});
