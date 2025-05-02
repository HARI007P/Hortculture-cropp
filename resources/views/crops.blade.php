@extends('layouts.app')

@section('content')
<h2>Crops List</h2>
<div class="grid-container">
@foreach($crops as $crop)
    <a href="{{ route('crops.show', $crop['id']) }}" class="card-link">
        <div class="card">
            <img src="{{ asset($crop['image']) }}" alt="{{ $crop['name'] }}">
            <h3>{{ $crop['name'] }}</h3>
            <p>Type: {{ $crop['type'] }}</p>
            <p>Price: ₹{{ $crop['price'] }}</p>
            <p>Value Addition: {{ $crop['value_addition'] }}</p>
        </div>
    </a>
@endforeach
</div>
@endsection
