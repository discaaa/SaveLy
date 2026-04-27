@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">

        <div style="
            background: #EDE9FE;
            padding: 25px;
            border-radius: 16px;
        ">
            @yield('form-content')
        </div>

    </div>
</div>

@endsection