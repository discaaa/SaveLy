@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="mb-0">@yield('page-title')</h5>

    <div>
        @yield('action-button')
    </div>
</div>

<div class="card border-0 shadow-sm" style="border-radius:16px;">
    <div class="card-body">

        {{-- FILTER --}}
        @hasSection('filter')
            <div class="mb-3">
                @yield('filter')
            </div>
        @endif

        {{-- TABLE --}}
        @yield('table-content')

    </div>
</div>

@endsection