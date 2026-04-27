@props([
    'variant' => 'primary',
    'type' => 'button'
])

<button 
    type="{{ $type }}"
    {{ $attributes->merge([
        'class' => 'btn ' . (
            $variant === 'primary' ? 'btn-primary' :
            ($variant === 'danger' ? 'btn-danger' :
            ($variant === 'success' ? 'btn-success' :
            ($variant === 'secondary' ? 'btn-secondary' : 'btn-primary')))
        )
    ]) }}
>
    {{ $slot }}
</button>