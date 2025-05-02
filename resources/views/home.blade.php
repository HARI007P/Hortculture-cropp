@extends('layouts.app')

@section('content')
<div class="home-container">
    <h1>Welcome to Horticultural Crop</h1>
    <p>Your one-stop platform for horticultural insights.</p>

    <div class="overview">
        <div class="section">
            <h2>Featured Crops</h2>
            <div class="grid-container">
                @foreach($crops as $crop)
                    <div class="card">
                        <img src="{{ asset($crop['image']) }}" alt="{{ $crop['name'] }}">
                        <h3>{{ $crop['name'] }}</h3>
                        <p>Price: ₹{{ $crop['price'] }}</p>
                        <p>Value Addition: {{ $crop['value_addition'] }}</p>
                    </div>
                @endforeach
            </div>
            <a href="/crops" class="view-more">View All Crops</a>
        </div>

        <div class="section">
            <h2>Featured Markets</h2>
            <div class="grid-container">
                @foreach($markets as $market)
                    <div class="card">
                        <img src="{{ asset($market['image']) }}" alt="{{ $market['name'] }}">
                        <h3>{{ $market['name'] }}</h3>
                        <p>Location: {{ $market['location'] }}</p>
                    </div>
                @endforeach
            </div>
            <a href="/markets" class="view-more">View All Markets</a>
        </div>

        <div class="section">
            <h2>Featured Cold Storages</h2>
            <div class="grid-container">
                @foreach($storages as $storage)
                    <div class="card">
                        <img src="{{ asset($storage['image']) }}" alt="{{ $storage['name'] }}">
                        <h3>{{ $storage['name'] }}</h3>
                        <p>Location: {{ $storage['location'] }}</p>
                        <p>Capacity: {{ $storage['capacity'] }}</p>
                    </div>
                @endforeach
            </div>
            <a href="/storages" class="view-more">View All Cold Storages</a>
        </div>
    </div>
</div>
@endsection
