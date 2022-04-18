@extends('layouts.main')
@section('content')
    <h1 class="text-center my-5"><strong>City Lists</strong></h1>
    <div class="d-flex flex-row p-1 justify-content-center" style="margin-bottom:25%">
      @foreach ($cities as $city)
        <ul class="list-group list-group-flush">
          <li class="list-group-item text-decoration-underline"><a href="/cities/{{ $city->slug }}" class="text-dark">{{ $city->name }}</a></li>
        </ul>
       @endforeach
    </div>
@endsection
