<?php

namespace App\Livewire\Admin\Customers;

use App\Livewire\Forms\CustomerForm;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Mary\Traits\Toast;

class Create extends Component
{
    use Toast;

    public CustomerForm $form;

    public function save(): void
    {
        $this->form->store();

        $this->redirectRoute('admin.customers.index', navigate: true);
    }

    public function cancel(): void
    {
        $this->redirectRoute('admin.customers.index', navigate: true);
    }

    public function render(): View
    {
        return view('livewire.admin.customers.show');
    }
}
