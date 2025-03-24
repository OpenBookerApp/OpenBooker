<div>
    <!-- HEADER -->
    <x-mary-header title="Availability" separator />
    <div class="flex flex-col items-center justify-center">
        <p class="w-1/2 items-center">
            Mark below the days and hours that your company will accept
            appointments. This plan will be the default for every new service
            record, but you will be able to change each service's plan
            separately by editing its record.
        </p>
        <div class="mt-8 grid w-full grid-cols-4 sm:w-1/2">
            <span class="mb-4 font-bold">Day</span>
            <span class="mb-4 text-center font-bold">Start</span>
            <span class="mb-4 text-center font-bold">End</span>
            <span class="mb-4 text-center font-bold">Edit</span>
            @foreach ($days as $day)
                <div
                    wire:key="{{ $day->id }}"
                    class="col-span-4 grid grid-cols-4"
                >
                    @if ($isEditing === true)
                        @if ($editingId === $day->id)
                            <x-mary-form
                                wire:submit="update"
                                class="col-span-4 mt-8 grid w-full grid-cols-4"
                            >
                                <x-mary-checkbox
                                    :label="$day->day"
                                    wire:model.live="form.enabled"
                                />
                                <x-time-picker
                                    wire:model.live="form.start"
                                    :status="$form->enabled"
                                />
                                <x-time-picker
                                    wire:model="form.end"
                                    :status="$form->enabled"
                                />
                                <x-mary-button
                                    wire:click="update()"
                                    class="btn-ghost text-primary"
                                    icon="lucide.check"
                                />
                            </x-mary-form>
                        @endif
                    @else
                        <x-checkbox
                            :id="$day->id"
                            :label="$day->day"
                            :status="$day->enabled"
                            disabled
                        />
                        <x-time-picker
                            :item="$day->start"
                            :status="$day->enabled"
                            disabled
                        />
                        <x-time-picker
                            :item="$day->end"
                            :status="$day->enabled"
                            disabled
                        />
                        <x-mary-button
                            wire:click="edit({{ $day }})"
                            class="btn-ghost text-primary"
                            icon="lucide.pencil"
                        />
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</div>
