<?php

use App\Models\Contact;
use App\Models\User;
use Livewire\Livewire;

beforeEach(function () {
    $this->user = User::factory()->create();
});

it('can render contacts screen', function () {
    $this->actingAs($this->user);

    $response = $this->get(route('app.contacts'))
        ->assertSeeLivewire('app.contacts');

    $response->assertStatus(200);
});

it('cannot render contacts screen if guest', function () {
    $response = $this->get(route('app.contacts'));

    $response->assertRedirect(route('login'));
});

it('can show all contacts', function () {
    Contact::factory()->count(15)->create();

    Livewire::actingAs($this->user)
        ->test('app.contacts')
        ->assertViewHas('contacts', function ($contacts) {
            return count($contacts) == 10;
        });
});

it('can search contacts', function () {
    Contact::factory()->create(['name' => 'John Doe']);
    Contact::factory()->create(['name' => 'Jane Doe']);

    Livewire::actingAs($this->user)
        ->test('app.contacts')
        ->set('search', 'John Doe')
        ->assertViewHas('contacts', function ($contacts) {
            return count($contacts) == 1;
        });
});

it('can open createDrawer', function () {
    Livewire::actingAs($this->user)
        ->test('app.contacts')
        ->call('openCreateDrawer')
        ->assertSee('Create New Contact');
});

it('can open editDrawer', function () {
    $contact = Contact::factory()->create();

    Livewire::actingAs($this->user)
        ->test('app.contacts')
        ->call('openEditDrawer', $contact)
        ->assertSee('Edit Contact')
        ->assertSee($contact->name)
        ->assertSee($contact->email)
        ->assertSee($contact->phone)
        ->assertSee($contact->timezone);
});

it('can close drawer', function () {
    Livewire::actingAs($this->user)
        ->test('app.contacts')
        ->call('closeDrawer')
        ->assertSet('showCreateDrawer', false)
        ->assertSet('showEditDrawer', false);
});

it('can create new contact', function () {
    Livewire::actingAs($this->user)
        ->test('app.contacts')
        ->call('openCreateDrawer')
        ->set('form.name', 'John Doe')
        ->set('form.email', 'john.doe@example.com')
        ->call('save')
        ->assertSet('showCreateDrawer', false)
        ->assertViewHas('contacts', function ($contacts) {
            return count($contacts) == 1;
        });
});

it('can update contact', function () {
    $contact = Contact::factory()->create([
        'name' => 'John Doe',
    ]);

    Livewire::actingAs($this->user)
        ->test('app.contacts')
        ->call('openEditDrawer', $contact)
        ->set('form.name', 'Jane Doe')
        ->call('update')
        ->assertSet('showEditDrawer', false)
        ->assertViewHas('contacts', function ($contacts) {
            return $contacts[0]->name == 'Jane Doe';
        });
});

it('can delete contact', function () {
    $contact = Contact::factory()->create();

    Livewire::actingAs($this->user)
        ->test('app.contacts')
        ->call('openDeleteModal', $contact)
        ->assertSet('contactForDelete', $contact)
        ->assertSet('deleteModal', true)
        ->call('delete')
        ->assertSet('deleteModal', false)
        ->assertViewHas('contacts', function ($contacts) {
            return count($contacts) == 0;
        });
});
