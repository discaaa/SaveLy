@props(['name'])

<input 
    type="date" 
    name="{{ $name }}"
    {{ $attributes->merge(['class' => 'border rounded-lg px-3 py-2']) }}
/>