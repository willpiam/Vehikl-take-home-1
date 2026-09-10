@extends('layouts.app')

@section('title', 'Oil Change Check')

@section('content')
    <h1>Oil Change Check</h1>
    <p>Enter the current odometer and details from the previous oil change.</p>

    @if ($errors->any())
        <div class="errors">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('check') }}">
        @csrf

        <label for="current_odometer">Current Odometer (km)</label>
        <input
            id="current_odometer"
            name="current_odometer"
            type="number"
            value="{{ old('current_odometer') }}"
            required
        >

        <label for="previous_oil_change_date">Date of Previous Oil Change</label>
        <input
            id="previous_oil_change_date"
            name="previous_oil_change_date"
            type="date"
            value="{{ old('previous_oil_change_date') }}"
            required
        >

        <label for="previous_odometer">Odometer at Previous Oil Change (km)</label>
        <input
            id="previous_odometer"
            name="previous_odometer"
            type="number"
            value="{{ old('previous_odometer') }}"
            required
        >

        <button type="submit">Check</button>
    </form>
@endsection
