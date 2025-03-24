<?php

namespace App\Livewire\App;

use App\Livewire\Forms\AvailabilityForm;
use App\Models\Availability;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Mary\Traits\Toast;

class Availabilities extends Component
{
    use Toast;

    public AvailabilityForm $form;

    public bool $isEditing = false;

    public int $editingId = 0;

    public function edit(Availability $availability): void
    {
        $this->form->setAvailability($availability);
        $this->isEditing = true;
        $this->editingId = $availability->id;
    }

    public function update(): void
    {
        $this->form->update();
        $this->isEditing = false;
        $this->editingId = 0;
        $this->success('Availability updated.', position: 'toast-bottom');
    }

    public function render(): View
    {
        return view('livewire.app.availabilities', [
            'days' => Availability::all(),
        ]);
    }
}
