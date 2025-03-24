<?php

namespace App\Livewire\App;

use App\Livewire\Forms\ContactForm;
use App\Models\Contact;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Component;
use Livewire\WithPagination;
use Mary\Traits\Toast;

class Contacts extends Component
{
    use Toast;
    use WithPagination;

    public ContactForm $form;

    public bool $showCreateDrawer = false;

    public bool $showEditDrawer = false;

    public bool $deleteModal = false;

    public string $search = '';

    public int $perPage = 10;

    public ?Contact $contactForDelete = null;

    public function openDeleteModal(Contact $contact): void
    {
        $this->contactForDelete = $contact;
        $this->deleteModal = true;
    }

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
            ['key' => 'name', 'label' => 'Name', 'class' => 'w-64'],
            ['key' => 'next_meeting', 'label' => 'Next meeting', 'class' => 'w-64'],
            ['key' => 'last_meeting', 'label' => 'Last meeting', 'class' => 'w-64'],
            ['key' => 'phone', 'label' => 'Phone', 'class' => 'w-64'],
            ['key' => 'timezone', 'label' => 'Timezone', 'class' => 'w-64'],
        ];
    }

    /**
     * @return LengthAwarePaginator<Contact>
     */
    public function contacts(): LengthAwarePaginator
    {
        return Contact::when($this->search, function ($query) {
            $query->where('name', 'like', '%' . $this->search . '%')
                ->orWhere('email', 'like', '%' . $this->search . '%');
        })
            ->orderBy(...array_values($this->sortBy))
            ->paginate($this->perPage);
    }

    public function updated(mixed $property): void
    {
        if (! is_array($property) && $property != '') {
            $this->resetPage();
        }
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

    public function openEditDrawer(Contact $contact): void
    {
        $this->form->setContact($contact);
        $this->showEditDrawer = true;
    }

    public function save(): void
    {
        $this->form->store();
        $this->closeDrawer();
        $this->success('Contact created.', position: 'toast-bottom');
    }

    public function update(): void
    {
        $this->form->update();
        $this->closeDrawer();
        $this->success('Contact updated.', position: 'toast-bottom');
    }

    public function delete(): void
    {
        $this->contactForDelete->delete();
        $this->deleteModal = false;
        $this->error('Contact deleted.', position: 'toast-bottom');
    }

    public function render(): View
    {
        return view('livewire.app.contacts')
            ->with([
                'contacts' => $this->contacts(),
                'headers' => $this->headers(),
            ]);
    }
}
