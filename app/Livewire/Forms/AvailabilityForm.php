<?php

namespace App\Livewire\Forms;

use App\Models\Availability;
use Livewire\Form;

class AvailabilityForm extends Form
{
    public ?Availability $availability = null;

    public string $day = '';

    public string $start = '';

    public string $end = '';

    public bool $enabled = false;

    /**
     * @return array<string, list<string>>
     */
    protected function rules(): array
    {
        return [
            'day' => [
                'required',
            ],
            'enabled' => [
                'required',
                'boolean',
            ],
            'start' => [
                'exclude_if:enabled,false',
                'required',
                'string',
                'max:255',
            ],
            'end' => [
                'exclude_if:enabled,false',
                'required',
                'string',
                'max:255',
            ],
        ];
    }

    public function setAvailability(Availability $availability): void
    {
        $this->availability = $availability;

        $this->day = $availability->day;
        $this->enabled = $availability->enabled;
        $this->start = $availability->start;
        $this->end = $availability->end;
    }

    public function update(): void
    {
        $this->validate();

        $this->availability->update(
            $this->all()
        );

        $this->reset();
    }
}
