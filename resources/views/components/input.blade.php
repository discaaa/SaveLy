@props([
    'label' => '',
    'type' => 'text',
    'name' => '',
    'placeholder' => ''
])

<div class="mb-3">
    @if($label)
        <label class="form-label">{{ $label }}</label>
    @endif

    <input 
        type="{{ $type }}"
        name="{{ $name }}"
        placeholder="{{ $placeholder }}"
        {{ $attributes->merge(['class' => 'form-control']) }}
    >
</div>