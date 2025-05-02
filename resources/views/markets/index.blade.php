@extends('layouts.app')

@section('content')
<h2>Markets</h2>
<div class="grid-container">
    @foreach($markets as $market)
        <a href="{{ route('markets.show', $market['id']) }}" class="card-link" title="{{ $market['name'] }}">
            <div class="card">
                <img src="{{ asset($market['image']) }}" alt="{{ $market['name'] }}">
                <h3>{{ $market['name'] }}</h3>
                <p>Location: {{ $market['location'] }}</p>
            </div>
        </a>
    @endforeach
</div>
@endsection

@section('styles')
<style>
    .grid-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        gap: 20px;
        margin-top: 30px;
    }

    .card-link {
        text-decoration: none;
        color: inherit;
    }

    .card {
        cursor: pointer;
        text-align: center;
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        background-color: #fff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
    }

    .card:hover {
        transform: translateY(-8px) scale(1.03);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .card img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .card h3 {
        font-size: 1.2rem;
        margin-top: 15px;
    }

    .card p {
        font-size: 1rem;
        color: #555;
    }
</style>
@endsection
