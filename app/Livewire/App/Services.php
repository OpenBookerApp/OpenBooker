<?php

namespace App\Livewire\App;

use App\Livewire\Forms\ServiceForm;
use App\Models\Service;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Mary\Traits\Toast;

class Services extends Component
{
    use Toast;

    public ServiceForm $form;

    public bool $showCreateDrawer = false;

    public bool $showEditDrawer = false;

    public bool $deleteModal = false;

    public ?Service $serviceForDelete = null;

    public function openDeleteModal(Service $service): void
    {
        $this->serviceForDelete = $service;
        $this->deleteModal = true;
    }

    public function openCreateDrawer(): void
    {
        $this->form->reset();
        $this->showCreateDrawer = true;
    }

    public function closeDrawer(): void
    {
        $this->form->reset();
        $this->showCreateDrawer = false;
        $this->showEditDrawer = false;
    }

    public function openEditDrawer(Service $service): void
    {
        $this->form->setService($service);
        $this->showEditDrawer = true;
    }

    public function save(): void
    {
        $this->form->store();
        $this->closeDrawer();
        $this->success('Service created.', position: 'toast-bottom');
    }

    public function update(): void
    {
        $this->form->update();
        $this->closeDrawer();
        $this->success('Service updated.', position: 'toast-bottom');
    }

    public function delete(): void
    {
        $this->serviceForDelete->delete();
        $this->deleteModal = false;
        $this->error('Service deleted.', position: 'toast-bottom');
    }

    public function render(): View
    {
        $durationOptions = [
            ['name' => '15 Minutes', 'id' => '15'],
            ['name' => '30 Minutes', 'id' => '30'],
            ['name' => '45 Minutes', 'id' => '45'],
            ['name' => '60 Minutes', 'id' => '60'],
            ['name' => 'Custom', 'id' => '0'],
        ];

        $customOptions = [
            ['name' => 'min', 'id' => 'min'],
            ['name' => 'hrs', 'id' => 'hrs'],
        ];

        $locationOptions = [
            ['name' => 'Phone Call', 'id' => 'phone'],
            ['name' => 'In-person', 'id' => 'in-person'],
        ];

        $services = Service::all();

        return view('livewire.app.services', [
            'durationOptions' => $durationOptions,
            'customOptions' => $customOptions,
            'locationOptions' => $locationOptions,
            'services' => $services,
        ]);
    }
}
