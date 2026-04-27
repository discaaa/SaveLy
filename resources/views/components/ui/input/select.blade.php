@props([
    'label' => null,
    'name'
])

<div class="flex flex-col gap-1">
    @if($label)
        <label class="text-sm text-gray-600">{{ $label }}</label>
    @endif

    <select name="{{ $name }}" {{ $attributes->merge(['class' => 'border rounded-lg px-3 py-2']) }}>
        {{ $slot }}
    </select>
</div>