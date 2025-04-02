@extends('layout.app')

@selection('content')
      <h1>Restaurants</h1>
      <a href="{{ route('restaurant.create') }}" class="btn btn-primary">Add New Restaurant</a>

      @foreach($restaurants as $restaurants)
          <div class="card mt-3">
              <div class="card-body">
                  <h3>{{ $restaurant->name }}</h3>
                  <p>{{ $restaurant->address }}</p>
                  <a href="{{ route('restaurants.edit', $restaurant->id) }}" class="btn btn-sm btn-warning">Edit</a>
                  <form action="{{ route('restaurants.destroy', $restaurant->id) }}" method="POST" class="d-inline">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                  </form>
              </div>
          </div>
      @endforeach
@endsection
