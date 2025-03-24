<?php

use App\Models\Service;
use App\Models\User;
use Livewire\Livewire;

beforeEach(function () {
    $this->user = User::factory()->create();
});

it('can render services screen', function () {
    $this->actingAs($this->user);

    $response = $this->get(route('app.services'))
        ->assertSeeLivewire('app.services');

    $response->assertStatus(200);
});

it('cannot render contacts screen if guest', function () {
    $response = $this->get(route('app.services'));

    $response->assertRedirect(route('login'));
});

it('can show all services', function () {
    Service::factory()->count(15)->create();

    Livewire::actingAs($this->user)
        ->test('app.services')
        ->assertViewHas('services', function ($services) {
            return count($services) == 15;
        });
});

it('can open createDrawer', function () {
    Livewire::actingAs($this->user)
        ->test('app.services')
        ->call('openCreateDrawer')
        ->assertSee('Create New Service');
});

it('can open editDrawer', function () {
    $service = Service::factory()->create();

    Livewire::actingAs($this->user)
        ->test('app.services')
        ->call('openEditDrawer', $service)
        ->assertSee('Edit Service')
        ->assertSee($service->name)
        ->assertSee($service->duration);
});

it('can close drawer', function () {
    Livewire::actingAs($this->user)
        ->test('app.services')
        ->call('closeDrawer')
        ->assertSet('showCreateDrawer', false)
        ->assertSet('showEditDrawer', false);
});

it('can create new service', function () {
    Livewire::actingAs($this->user)
        ->test('app.services')
        ->call('openCreateDrawer')
        ->set('form.name', 'Service 1')
        ->set('form.duration', 15)
        ->set('form.location', 'Some random location')
        ->call('save')
        ->assertSet('showCreateDrawer', false)
        ->assertViewHas('services', function ($services) {
            return count($services) == 1;
        });
});

it('can update service', function () {
    $service = Service::factory()->create([
        'name' => 'Service 1',
    ]);

    Livewire::actingAs($this->user)
        ->test('app.services')
        ->call('openEditDrawer', $service)
        ->set('form.name', 'Service 2')
        ->set('form.duration', 45)
        ->call('update')
        ->assertSet('showEditDrawer', false)
        ->assertViewHas('services', function ($services) {
            return $services[0]->name == 'Service 2';
        });

    $this->assertDatabaseHas('services', [
        'name' => 'Service 2',
        'duration' => 45 * 60,
    ]);
});

it('can delete service', function () {
    $service = Service::factory()->create();

    Livewire::actingAs($this->user)
        ->test('app.services')
        ->call('openDeleteModal', $service)
        ->assertSet('serviceForDelete', $service)
        ->assertSet('deleteModal', true)
        ->call('delete')
        ->assertSet('deleteModal', false)
        ->assertViewHas('services', function ($services) {
            return count($services) == 0;
        });
});

it('can create new service with custom duration in min', function () {
    Livewire::actingAs($this->user)
        ->test('app.services')
        ->call('openCreateDrawer')
        ->set('form.name', 'Service 1')
        ->set('form.duration', 0)
        ->set('form.customOption', 'min')
        ->set('form.customDuration', 90)
        ->set('form.location', 'Some random location')
        ->call('save')
        ->assertSet('showCreateDrawer', false)
        ->assertViewHas('services', function ($services) {
            return count($services) == 1;
        });

    $this->assertDatabaseHas('services', [
        'name' => 'Service 1',
        'duration' => 90 * 60,
    ]);
});

it('can create new service with custom duration in hrs', function () {
    Livewire::actingAs($this->user)
        ->test('app.services')
        ->call('openCreateDrawer')
        ->set('form.name', 'Service 1')
        ->set('form.duration', 0)
        ->set('form.customOption', 'hrs')
        ->set('form.customDuration', 2)
        ->set('form.location', 'Some random location')
        ->call('save')
        ->assertSet('showCreateDrawer', false)
        ->assertViewHas('services', function ($services) {
            return count($services) == 1;
        });

    $this->assertDatabaseHas('services', [
        'name' => 'Service 1',
        'duration' => 2 * 60 * 60,
    ]);
});

it('can update service with custom duration in min', function () {
    $service = Service::factory()->create([
        'name' => 'Service 1',
    ]);

    Livewire::actingAs($this->user)
        ->test('app.services')
        ->call('openEditDrawer', $service)
        ->set('form.name', 'Service 2')
        ->set('form.duration', 0)
        ->set('form.customOption', 'min')
        ->set('form.customDuration', 90)
        ->call('update')
        ->assertSet('showEditDrawer', false)
        ->assertViewHas('services', function ($services) {
            return $services[0]->name == 'Service 2';
        });

    $this->assertDatabaseHas('services', [
        'name' => 'Service 2',
        'duration' => 90 * 60,
    ]);
});

it('can update service with custom duration in hrs', function () {
    $service = Service::factory()->create([
        'name' => 'Service 1',
    ]);

    Livewire::actingAs($this->user)
        ->test('app.services')
        ->call('openEditDrawer', $service)
        ->set('form.name', 'Service 2')
        ->set('form.duration', 0)
        ->set('form.customOption', 'hrs')
        ->set('form.customDuration', 2)
        ->call('update')
        ->assertSet('showEditDrawer', false)
        ->assertViewHas('services', function ($services) {
            return $services[0]->name == 'Service 2';
        });

    $this->assertDatabaseHas('services', [
        'name' => 'Service 2',
        'duration' => 2 * 60 * 60,
    ]);
});

it('can correctly call setService()', function () {
    $service = Service::factory()->create([
        'duration' => 15 * 60,
    ]);

    Livewire::actingAs($this->user)
        ->test('app.services')
        ->call('openEditDrawer', $service)
        ->assertSet('form.duration', 15);

    $service = Service::factory()->create([
        'duration' => 30 * 60,
    ]);

    Livewire::actingAs($this->user)
        ->test('app.services')
        ->call('openEditDrawer', $service)
        ->assertSet('form.duration', 30);

    $service = Service::factory()->create([
        'duration' => 45 * 60,
    ]);

    Livewire::actingAs($this->user)
        ->test('app.services')
        ->call('openEditDrawer', $service)
        ->assertSet('form.duration', 45);

    $service = Service::factory()->create([
        'duration' => 60 * 60,
    ]);

    Livewire::actingAs($this->user)
        ->test('app.services')
        ->call('openEditDrawer', $service)
        ->assertSet('form.duration', 60);

    $service = Service::factory()->create([
        'duration' => 90 * 60,
    ]);

    Livewire::actingAs($this->user)
        ->test('app.services')
        ->call('openEditDrawer', $service)
        ->assertSet('form.duration', 0)
        ->assertSet('form.customOption', 'min')
        ->assertSet('form.customDuration', 90);

    $service = Service::factory()->create([
        'duration' => 120 * 60,
    ]);

    Livewire::actingAs($this->user)
        ->test('app.services')
        ->call('openEditDrawer', $service)
        ->assertSet('form.duration', 0)
        ->assertSet('form.customOption', 'hrs')
        ->assertSet('form.customDuration', 2);
});
