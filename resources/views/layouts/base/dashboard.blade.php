@extends('layouts.app')

@section('content')

    {{-- TOP CARDS --}}
    <div class="row g-4 mb-4">
        @yield('top-content')
    </div>

    {{-- QUICK / MIDDLE --}}
    @hasSection('middle-content')
        <div class="mb-4">
            @yield('middle-content')
        </div>
    @endif

    {{-- BOTTOM SECTION --}}
    <div class="row g-4">
        @yield('bottom-content')
    </div>

@endsection