<?php

use App\Livewire\Settings\Appearance;

it('can render appearance screen', function () {
    $user = \App\Models\User::factory()->create();

    $this->actingAs($user);

    $this->get(route('settings.appearance'))
        ->assertSeeLivewire(Appearance::class);
});
