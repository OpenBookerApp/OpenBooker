@props(['id', 'label', 'status'])
<div>
    <fieldset class="fieldset">
        <div class="w-full">
            <label class="flex cursor-pointer items-center gap-3">
                {{-- CHECKBOX --}}
                <input
                    id="{{ $id }}"
                    type="checkbox"
                    {{ $attributes->merge(['class' => 'checkbox']) }}
                    @checked($status)
                />

                {{-- LABEL --}}
                <div>
                    <div class="text-sm font-medium">
                        {{ $label }}
                    </div>
                </div>
            </label>
        </div>
    </fieldset>
</div>
