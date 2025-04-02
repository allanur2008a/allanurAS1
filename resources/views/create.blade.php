@extends('layouts.app')

@section('content')
    <h1>Create New Restaurant</h1>

    <form action="{{ route('restaurants.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label>City:</label>
            <select name="city_id" class="form-control" required>
                @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create Restaurant</button>
    </form>
@endsection
