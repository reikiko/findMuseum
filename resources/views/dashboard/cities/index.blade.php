@extends('dashboard.layouts.main')

@section('container')
  <div
    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">City Lists</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <a href="/"><button type="submit" class="btn btn-sm btn-outline-secondary">
          Go to Home Page
        </button></a>
      </div>
    </div>
  </div>
  @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  @if(session()->has('deleted'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('deleted') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  <div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">City</th>
          <th scope="col">Slug</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($cities as $city)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $city->name }}</td>
          <td>{{ $city->slug }}</td>
          <td>
            <a href='/dashboard/cities/{{ $city->slug }}/edit ' class="btn btn-warning btn-sm px-3"><i class="bi bi-pencil-square"></i></a>
            <form action='/dashboard/cities/{{ $city->slug }}' method='post' class="d-inline">
              @method('delete')
              @csrf
              <button class="btn btn-danger btn-sm border-0 px-3" onclick="return confirm('Confirm Delete')">
                <i class="bi bi-trash-fill"></i>
              </button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <a href='/dashboard/cities/create' class="btn btn-secondary btn-sm"><i class="bi bi-folder-plus"></i> Add New City</a>
  </div>
@endsection

