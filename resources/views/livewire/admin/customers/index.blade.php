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
        <x-slot:actions>
        <x-mary-button label="Add" wire:click="addNew()" icon="lucide.plus" />
        </x-slot:actions>
    </x-mary-header>

    <!-- TABLE  -->
    <x-mary-card shadow>
        <x-mary-table
            :headers="$headers"
            :rows="$customers"
            :sort-by="$sortBy"
            with-pagination
            per-page="perPage"
            :per-page-values="[5, 10, 25, 50, 100]"
            :link="route('admin.customers.show', ['customer' => '[id]'])"
        />
    </x-mary-card>
</div>
