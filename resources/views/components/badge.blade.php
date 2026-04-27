@props([
    'type' => 'primary'
])

<span 
    class="badge 
        {{ $type === 'income' ? 'bg-success' : '' }}
        {{ $type === 'expense' ? 'bg-danger' : '' }}
        {{ $type === 'saving' ? 'bg-primary' : '' }}
    "
>
    {{ $slot }}
</span>