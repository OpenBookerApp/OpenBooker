<?php

namespace App\Livewire\Admin\Customers;

use App\Livewire\Forms\CustomerForm;
use App\Models\Customer;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Mary\Traits\Toast;

class Show extends Component
{
    use Toast;

    public CustomerForm $form;

    public function mount(Customer $customer): void
    {
        $this->form->setCustomer($customer);
    }

    public function save(): void
    {
        $this->form->update();

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
