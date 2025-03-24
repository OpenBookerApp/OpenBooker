@props(['error' => null, 'status' => true, 'item' => null])
<div
    @if ($attributes->wire('model')->value)
        x-data="{ value: @entangle($attributes->wire('model')) }"
        x-on:change="value = $event.target.value"
        x-init="
            flatpickr($refs.input, {
                enableTime: true,
                dateFormat: 'H:i',
                noCalendar: true,
                time_24hr: true,
            })
        "
    @endif
>
    <input
        {{ $attributes->whereDoesntStartWith('wire:model') }}
        @if ($attributes->wire('model')->value)
            x-ref="input"
            x-bind:value="value"
        @else
            value="{{ $item }}"
        @endif
        type="text"
        @class([
            'align-center block h-full w-full border-gray-300 bg-gray-50 pl-10 shadow-sm sm:text-lg',
            'hidden' => $status === false,
        ])
    />
</div>
