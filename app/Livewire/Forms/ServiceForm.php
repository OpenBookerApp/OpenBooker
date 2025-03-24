<?php

namespace App\Livewire\Forms;

use App\Models\Service;
use Livewire\Form;

class ServiceForm extends Form
{
    public ?Service $service = null;

    public string $name = '';

    public int $duration = 15;

    public string $customOption = 'min';

    public ?int $customDuration = null;

    public string $location = '';

    /**
     * @return array<string, list<string>>
     */
    protected function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
            ],
            'duration' => [
                'required',
                'integer',
            ],
            'location' => [
                'required',
                'string',
                'max:255',
            ],
            'customOption' => [
                'required',
            ],
            'customDuration' => [
                'exclude_unless:duration,0',
                'required',
                'integer',
            ],
        ];
    }

    public function setService(Service $service): void
    {
        $this->service = $service;

        if ($service->duration === 900) {
            $this->duration = 15;
        } elseif ($service->duration === 1800) {
            $this->duration = 30;
        } elseif ($service->duration === 2700) {
            $this->duration = 45;
        } elseif ($service->duration === 3600) {
            $this->duration = 60;
        } else {
            $this->duration = 0;
            if ($service->duration % 3600 === 0) {
                $this->customOption = 'hrs';
                $this->customDuration = $service->duration / 3600;
            } else {
                $this->customOption = 'min';
                $this->customDuration = $service->duration / 60;
            }
        }
        $this->name = $service->name;
        $this->location = $service->location;
    }

    public function update(): void
    {
        $this->validate();

        if ($this->duration !== 0) {
            $this->duration = $this->duration * 60;
            $this->service->update(
                $this->all()
            );
        } else {
            if ($this->customOption === 'min') {
                $this->duration = $this->customDuration * 60;
            } elseif ($this->customOption === 'hrs') {
                $this->duration = $this->customDuration * 60 * 60;
            }
            $this->service->update(
                $this->all()
            );
        }

        $this->reset();
    }

    public function store(): void
    {
        $this->validate();

        if ($this->duration !== 0) {
            $this->duration = $this->duration * 60;
            Service::create($this->all());
        } else {
            if ($this->customOption === 'min') {
                $this->duration = $this->customDuration * 60;
            } elseif ($this->customOption === 'hrs') {
                $this->duration = $this->customDuration * 60 * 60;
            }
            Service::create($this->all());
        }

        $this->reset();
    }
}
