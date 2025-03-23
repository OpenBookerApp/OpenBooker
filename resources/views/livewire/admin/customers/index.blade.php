<div>
    <!-- HEADER -->
    <x-mary-header title="Customers" separator progress-indicator>
        <x-slot:middle class="!justify-end">
            <x-mary-input
                placeholder="Search..."
                wire:model.live.debounce="search"
                clearable
                icon="o-magnifying-glass"
            />
        </x-slot>
    </x-mary-header>

    <!-- TABLE  -->
    <x-mary-card shadow>
        <x-mary-table
            :headers="$headers"
            :rows="$customers"
            :sort-by="$sortBy"
        >
            @scope('actions', $customer)
                <x-mary-button
                    icon="o-trash"
                    wire:click="delete({{ $customer['id'] }})"
                    wire:confirm="Are you sure?"
                    spinner
                    class="btn-ghost btn-sm text-error"
                />
            @endscope
        </x-mary-table>
    </x-mary-card>
    <x-mary-modal wire:model="showModal">
        <x-slot:title>Confirm Action</x-slot:title>
        Are you sure you want to proceed?
        <x-slot:actions>
            <x-mary-button type="secondary" wire:click="cancel">Cancel</x-mary-button>
            <x-mary-button type="primary" wire:click="confirm">Confirm</x-mary-button>
        </x-slot:actions>
    </x-mary-modal>

</div>
