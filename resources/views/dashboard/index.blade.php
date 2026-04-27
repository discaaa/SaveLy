@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="row g-4">

    <div class="col-md-4">
        <div class="card card-custom p-3 shadow-sm">
            <h6>Total Balance</h6>
            <h4>Rp 2.500.000</h4>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-custom p-3 shadow-sm">
            <h6>Total Income</h6>
            <h4>Rp 3.000.000</h4>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-custom p-3 shadow-sm">
            <h6>Total Expense</h6>
            <h4>Rp 1.000.000</h4>
        </div>
    </div>

</div>

@endsection