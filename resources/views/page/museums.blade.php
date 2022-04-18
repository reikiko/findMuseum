@extends('layouts.main')
@section('content')
  <div class="container">
    <h1 class="text-center my-4"><strong>{{$index}}</strong></h1>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="/museums">
          <div class="input-group mb-3 mx-auto">
            <input type="text" class="form-control" placeholder="Search.." name="search">
            <button class="btn btn-dark" type="submit">Search</button>
          </div>
        </form>
      </div>
    </div>
    
    @if ($museums->count())
      <div class="d-flex flex-wrap align-content-between justify-content-center">
        @foreach ($museums as $museum)
          <div class="card m-4 shadow" style="width: 18rem; overflow:hidden;">
            @if($museum->image)
              <img src="{{ asset('/storage/'. $museum->image ) }}" 
              class="card-img-top" style="height: 210px; object-fit:cover;" alt="{{ $museum->name }}">
            @else
            <img src="https://thesmartlocal.com/indonesia/wp-content/uploads/2020/11/Museums-and-galleries-in-Jakarta-Galeri-Nasional-1.jpg" 
            class="card-img-top"style="height: 210px; overflow: hidden;" alt="img">
            @endif
            <div class="card-body">
              <h5 class="card-title fw-bold">{{ $museum->name }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{ $museum->city->name }}</h6>
              <p class="card-text">{{ $museum->excerpt }}</p>
              <a href="/museums/{{ $museum->slug }}" class="card-link text-decoration-underlined text-muted">View More</a>
            </div>
          </div>
        @endforeach
      </div>
    @else
      <p class="text-center fs-5 text-muted">No museum found</p>
    @endif
  </div>
@endsection
