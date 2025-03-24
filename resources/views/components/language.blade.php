@props(['model'])
@php
    $options = [
        ['id' => 'English', 'name' => 'English'],
    ];
@endphp

<x-mary-select
    label="Language"
    :options="$options"
    wire:model="{{ $model }}"
/>
