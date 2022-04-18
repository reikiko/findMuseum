@extends('layouts.main')
@section('content')
<div class="container col-xxl-8 px-auto py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="https://thesmartlocal.com/indonesia/wp-content/uploads/2020/11/Museums-and-galleries-in-Jakarta-Galeri-Nasional-1.jpg" class="d-block mx-lg-auto img-fluid" style="border-radius:15px" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-4">Find your favorite Museum here.</h1>
        <p class="my-3">Museum adalah lembaga yang berfungsi melindungi, mengembangkan, memanfaatkan koleksi, dan mengomunikasikannya kepada masyarakat.</p>
        <div class="d-grid gap-3 d-md-flex justify-content-md-start mt-4">
          <a href="/museums"><button type="button" class="btn btn-primary btn-sm px-3 py-1">Learn More <i class="bi bi-arrow-right"></i></button></a>
        </div>
      </div>
    </div>
</div>
@endsection
