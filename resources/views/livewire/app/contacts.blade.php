<div>
    <!-- HEADER -->
    <x-mary-header title="Contacts" separator progress-indicator>
        <x-slot:middle class="!justify-end">
            <x-mary-input
                placeholder="Search..."
                wire:model.live.debounce="search"
                clearable
                icon="o-magnifying-glass"
            />
        </x-slot>
        <x-slot:actions>
            <x-mary-button
                label="New Contact"
                class="btn-primary"
                wire:click="openCreateDrawer"
                icon="lucide.plus"
            />
        </x-slot>
    </x-mary-header>

    <!-- TABLE  -->
    <x-mary-card shadow>
        <x-mary-table
            :headers="$headers"
            :rows="$contacts"
            :sort-by="$sortBy"
            with-pagination
            per-page="perPage"
            :per-page-values="[5, 10, 25, 50, 100]"
        >
            @scope('cell_name', $contact)
                <div class="flex flex-col">
                    <div>
                        {{ $contact->name }}
                        <x-mary-icon name="lucide.star" />
                    </div>
                    {{ $contact->email }}
                </div>
            @endscope

            @scope('actions', $contact)
                <div class="flex flex-row">
                    <x-mary-button
                        icon="lucide.pencil"
                        wire:click="openEditDrawer({{ $contact }})"
                        class="btn-ghost btn-sm text-primary"
                    />
                    <x-mary-button
                        icon="lucide.trash-2"
                        wire:click="openDeleteModal({{ $contact }})"
                        class="btn-ghost btn-sm text-error"
                    />
                </div>
            @endscope
        </x-mary-table>
    </x-mary-card>

    {{-- Create Contact Drawer --}}
    <x-mary-drawer
        wire:model="showCreateDrawer"
        title="Create New Contact"
        separator
        close-on-escape
        with-close-button
        class="w-2/5"
        right
    >
        <x-mary-form wire:submit="save">
            <x-mary-input label="Name" wire:model="form.name" />
            <x-mary-input label="Email" wire:model="form.email" />
            <x-mary-input label="Phone" wire:model="form.phone" />
            <x-timezone model="form.timezone" />

            <x-slot:actions>
                <x-mary-button label="Cancel" wire:click="closeDrawer" />
                <x-mary-button
                    label="Save Contact"
                    class="btn-primary"
                    type="submit"
                    spinner="save"
                />
            </x-slot>
        </x-mary-form>
    </x-mary-drawer>

    {{-- Edit Contact Drawer --}}
    <x-mary-drawer
        wire:model="showEditDrawer"
        title="Edit Contact"
        separator
        close-on-escape
        with-close-button
        class="w-2/5"
        right
    >
        <x-mary-form wire:submit="update">
            <x-mary-input label="Name" wire:model="form.name" />
            <x-mary-input label="Email" wire:model="form.email" />
            <x-mary-input label="Phone" wire:model="form.phone" />
            <x-timezone model="form.timezone" />

            <x-slot:actions>
                <x-mary-button label="Cancel" wire:click="closeDrawer" />
                <x-mary-button
                    label="Update Contact"
                    class="btn-primary"
                    type="submit"
                    spinner="save"
                />
            </x-slot>
        </x-mary-form>
    </x-mary-drawer>

    {{-- Confirm Delete Modal --}}
    <x-mary-modal wire:model="deleteModal" class="text-error backdrop-blur">
        <x-slot:title>Danger</x-slot>
        <span class="text-base-content">
            Are you sure you want to delete this contact?
        </span>
        <x-slot:actions>
            <x-mary-button label="Cancel" wire:click="deleteModal = false" />
            <x-mary-button
                label="Yes, Delete"
                wire:click="delete()"
                icon="lucide.trash-2"
                class="btn-ghost text-error"
            />
        </x-slot>
    </x-mary-modal>
</div>
