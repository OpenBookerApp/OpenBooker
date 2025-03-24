<?php

use App\Models\Availability;
use App\Models\User;
use Database\Seeders\DatabaseSeeder;
use Livewire\Livewire;

beforeEach(function () {
    $this->user = User::factory()->create();
});

it('can render availabilities screen', function () {
    $this->actingAs($this->user);

    $response = $this->get(route('app.availabilities'))
        ->assertSeeLivewire('app.availabilities');

    $response->assertStatus(200);
});

it('cannot render availabilities screen if guest', function () {
    $response = $this->get(route('app.availabilities'));

    $response->assertRedirect(route('login'));
});

it('can show all availabilities', function () {
    $this->seed(DatabaseSeeder::class);

    Livewire::actingAs($this->user)
        ->test('app.availabilities')
        ->assertViewHas('days', function ($days) {
            return count($days) == 7;
        });
});

it('can update availability', function () {
    $this->seed(DatabaseSeeder::class);

    $availability = Availability::first();

    Livewire::actingAs($this->user)
        ->test('app.availabilities')
        ->call('edit', $availability)
        ->assertSet('isEditing', true)
        ->assertSet('editingId', $availability->id)
        ->set('form.enabled', false)
        ->set('form.start', '09:30')
        ->set('form.end', '17:00')
        ->call('update')
        ->assertSet('isEditing', false)
        ->assertSet('editingId', 0);

    $this->assertDatabaseHas('availabilities', [
        'day' => 'Monday',
        'start' => '09:30',
        'end' => '17:00',
        'enabled' => false,
    ]);
});
