<?php

namespace App\Livewire\Admin\Customers;

use App\Models\Customer;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;
use Mary\Traits\Toast;

class Index extends Component
{
    use Toast;
    use WithPagination;

    public bool $showModal = true;

    public string $search = '';

    public bool $drawer = false;

    public array $sortBy = ['column' => 'name', 'direction' => 'asc'];

    public function clear(): void
    {
        $this->reset();
        $this->success('Filters cleared.', position: 'toast-bottom');
    }

    // Delete action
    public function delete($id): void
    {
        $this->warning("Will delete #$id", 'It is fake.', position: 'toast-bottom');
    }

    public function headers(): array
    {
        return [
            ['key' => 'id', 'label' => '#', 'class' => 'w-1'],
            ['key' => 'user.name', 'label' => 'Name', 'class' => 'w-64'],
            ['key' => 'user.email', 'label' => 'Email', 'class' => 'w-64'],
            ['key' => 'phone', 'label' => 'Phone', 'class' => 'w-64'],
        ];
    }

    public function customers()
    {
        return Customer::whereHas('user', function ($query) {
            $query->where('name', 'like', '%' . $this->search . '%');
        })->get()
            ->sortBy([[...array_values($this->sortBy)]]);
    }

    public function render(): View
    {
        return view('livewire.admin.customers.index')
            ->with([
                'customers' => $this->customers(),
                'headers' => $this->headers(),
            ]);
    }
}
