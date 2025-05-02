@extends('layouts.app')

@section('content')
<h2>Cold Storages</h2>
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
@endsection
