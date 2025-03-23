<?php

namespace App\Livewire\Admin\Customers;

use App\Models\Customer;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Component;
use Livewire\WithPagination;
use Mary\Traits\Toast;

class Index extends Component
{
    use Toast;
    use WithPagination;

    public string $search = '';

    public int $perPage = 10;

    /**
     * @var array|string[]
     */
    public array $sortBy = ['column' => 'id', 'direction' => 'asc'];

    /**
     * @return array<int, array<string, string>>
     */
    public function headers(): array
    {
        return [
            ['key' => 'id', 'label' => '#', 'class' => 'w-1'],
            ['key' => 'user_name', 'label' => 'Name', 'class' => 'w-64'],
            ['key' => 'user_email', 'label' => 'Email', 'class' => 'w-64'],
            ['key' => 'phone', 'label' => 'Phone', 'class' => 'w-64'],
        ];
    }

    /**
     * @return LengthAwarePaginator<Customer>
     */
    public function customers(): LengthAwarePaginator
    {
        return Customer::withAggregate('user', 'name')
            ->withAggregate('user', 'email')
            ->orderBy(...array_values($this->sortBy))
            ->where('phone', 'like', '%' . $this->search . '%')
            ->orWhereHas('user', function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('email', 'like', '%' . $this->search . '%');
            })
            ->paginate($this->perPage);
    }

    public function addNew(): void
    {
        $this->redirectRoute('admin.customers.create', navigate: true);
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
