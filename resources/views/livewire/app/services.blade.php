@php
    use Carbon\CarbonInterval;
@endphp

<div>
    <!-- HEADER -->
    <x-mary-header title="Services" separator>
        <x-slot:actions>
            <x-mary-button
                label="New Service"
                class="btn-primary"
                wire:click="openCreateDrawer"
                icon="lucide.plus"
            />
        </x-slot>
    </x-mary-header>

    @foreach ($services as $service)
        <x-mary-list-item :item="$service">
            <x-slot:value>
                {{ $service->name }}
            </x-slot>
            <x-slot:sub-value>
                {{ CarbonInterval::seconds($service->duration)->cascade()->forHumans() }}
            </x-slot>
            <x-slot:actions>
                <div class="flex flex-row">
                    <x-mary-button
                        icon="lucide.pencil"
                        wire:click="openEditDrawer({{ $service }})"
                        class="btn-ghost btn-sm text-primary"
                    />
                    <x-mary-button
                        icon="lucide.trash-2"
                        wire:click="openDeleteModal({{ $service }})"
                        class="btn-ghost btn-sm text-error"
                    />
                </div>
            </x-slot>
        </x-mary-list-item>
    @endforeach

    {{-- Create Service Drawer --}}
    <x-mary-drawer
        wire:model="showCreateDrawer"
        title="Create New Service"
        separator
        close-on-escape
        with-close-button
        class="w-2/5"
        right
    >
        <x-mary-form wire:submit="save">
            <x-mary-input label="Name" wire:model="form.name" />
            <x-mary-select
                label="Duration"
                wire:model.live="form.duration"
                :options="$durationOptions"
            />
            @if ($form->duration === 0)
                <div class="flex items-center gap-x-4">
                    <x-mary-input
                        type="number"
                        wire:model.live="form.customDuration"
                    />
                    <x-mary-select
                        wire:model.live="form.customOption"
                        :options="$customOptions"
                    />
                </div>
            @endif

            <x-mary-input label="Location" wire:model="form.location" />

            <x-slot:actions>
                <x-mary-button label="Cancel" wire:click="closeDrawer" />
                <x-mary-button
                    label="Save Service"
                    class="btn-primary"
                    type="submit"
                    spinner="save"
                />
            </x-slot>
        </x-mary-form>
    </x-mary-drawer>

    {{-- Edit Service Drawer --}}
    <x-mary-drawer
        wire:model="showEditDrawer"
        title="Edit Service"
        separator
        close-on-escape
        with-close-button
        class="w-2/5"
        right
    >
        <x-mary-form wire:submit="update">
            <x-mary-input label="Name" wire:model="form.name" />
            <x-mary-select
                label="Duration"
                wire:model.live="form.duration"
                :options="$durationOptions"
            />
            @if ($form->duration === 0)
                <div class="flex items-center gap-x-4">
                    <x-mary-input
                        type="number"
                        wire:model.live="form.customDuration"
                    />
                    <x-mary-select
                        wire:model.live="form.customOption"
                        :options="$customOptions"
                    />
                </div>
            @endif

            <x-mary-input label="Location" wire:model="form.location" />

            <x-slot:actions>
                <x-mary-button label="Cancel" wire:click="closeDrawer" />
                <x-mary-button
                    label="Update Service"
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
            Are you sure you want to delete this service?
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
