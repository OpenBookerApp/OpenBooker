<div>
    <x-mary-card title="Customer" class="max-w-3xl" shadow separator>
        <x-mary-form wire:submit="save" class="grid grid-cols-2" no-separator>
            <x-mary-input label="Name" wire:model="form.name" />
            <x-mary-input label="Email" wire:model="form.email" />
            <x-mary-input label="Phone" wire:model="form.phone" />
            <x-mary-input label="Address" wire:model="form.address" />
            <x-mary-input label="City" wire:model="form.city" />
            <x-mary-input label="Zip Code" wire:model="form.zip_code" />
            <x-mary-input label="Country" wire:model="form.country" />
            <x-mary-input label="Language" wire:model="form.language" />
            <x-mary-input label="Timezone" wire:model="form.timezone" />
            <x-mary-input label="Notes" wire:model="form.notes" />
            {{-- <x-mary-input label="Appointments" wire:model="name" /> --}}

            <x-slot:actions>
                <x-mary-button label="Cancel" wire:click="cancel" />
                <x-mary-button
                    label="Click me!"
                    class="btn-primary"
                    type="submit"
                    spinner="save"
                />
            </x-slot>
        </x-mary-form>
    </x-mary-card>
</div>
