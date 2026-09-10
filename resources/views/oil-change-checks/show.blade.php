@extends('layouts.app')

@section('title', 'Oil Change Result')

@section('content')
    <h1>Oil Change Result</h1>

    @if ($check->isDue())
        <p class="result-due">Due for an oil change</p>
    @else
        <p class="result-ok">Not due for an oil change</p>
    @endif

    <dl>
        <dt>Current Odometer</dt>
        <dd>{{ $check->current_odometer }} km</dd>

        <dt>Date of Previous Oil Change</dt>
        <dd>{{ $check->previous_oil_change_date->format('Y-m-d') }}</dd>

        <dt>Odometer at Previous Oil Change</dt>
        <dd>{{ $check->previous_odometer }} km</dd>
    </dl>

    <a class="button" href="{{ route('home') }}">Check another car</a>
@endsection
