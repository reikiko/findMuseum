@extends('layouts.main')
@section('content')
  <div class="col-lg-6 mx-auto p-3 py-md-5">
    <main>
      <h1>{{ $museum->name }}</h1>
      <a href="/cities/{{ $museum->city->slug }}" class="text-decoration-none"><span class="text-muted">City <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
      </svg> {{ $museum->city->name }}</span></a>
      <div style="max-height:350px; overflow:hidden" class="my-3">
        @if($museum->image)
          <img src="{{ asset('/storage/'. $museum->image ) }}" 
          class="img-fluid" style="object-fit:contain;" alt="{{ $museum->name }}">
        @else
          <img src="https://thesmartlocal.com/indonesia/wp-content/uploads/2020/11/Museums-and-galleries-in-Jakarta-Galeri-Nasional-1.jpg" 
          class="img-fluid " alt="img">
        @endif
      </div> 
      <p class="fs-5 col-md-8 my-4 fs-6">{!! $museum->desc !!}</p>
      <div class="mb-5">
        <a href="/" class="btn btn-primary btn-sm px-4 rounded-pill">Buy Ticket!</a>
      </div>
      <a href="/museums" class="link-dark"> Back to Page</a>
    </main>
  </div>
@endsection