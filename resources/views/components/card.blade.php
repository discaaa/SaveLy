@props([
    'title' => ''
])

<div class="card shadow-sm">
    @if($title)
        <div class="card-header">
            <h6 class="mb-0">{{ $title }}</h6>
        </div>
    @endif

    <div class="card-body">
        {{ $slot }}
    </div>
</div>