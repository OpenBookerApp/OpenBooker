<?php

namespace App\Livewire\App;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Appointments extends Component
{
    public function render(): View
    {
        $events = [
            [
                'title' => 'The Title',
                'start' => '2025-03-20T13:00:00',
                'end' => '2025-03-20T14:30:00',
            ],
            [
                'title' => 'Second Title',
                'start' => '2025-03-20T13:00:00',
                'end' => '2025-03-20T14:30:00',
            ],
            [
                'title' => 'Third Title',
                'start' => '2025-03-20T13:00:00',
                'end' => '2025-03-20T14:30:00',
            ],
            [
                'title' => 'Fourth Title',
                'start' => '2025-03-20T13:00:00',
                'end' => '2025-03-20T14:30:00',
            ],
        ];

        return view('livewire.app.appointments', [
            'events' => $events,
        ]);
    }
}
