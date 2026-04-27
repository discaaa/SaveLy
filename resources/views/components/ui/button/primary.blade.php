@props([
    'type' => 'button',
    'variant' => 'primary' // primary | secondary | danger
])

@php
$base = "px-4 py-2 rounded-lg font-semibold transition";
$variants = [
    'primary' => "bg-blue-500 text-white hover:bg-blue-600",
    'secondary' => "bg-gray-200 text-gray-800 hover:bg-gray-300",
    'danger' => "bg-red-500 text-white hover:bg-red-600",
];
@endphp

<button type="{{ $type }}" {{ $attributes->merge(['class' => $base . ' ' . $variants[$variant]]) }}>
    {{ $slot }}
</button>