<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="/css/style.css"/>
  <title>{{ $index }} Page</title>
</head>
<body class="text-center">
  <div class="container">
    <form class="form-signin" action="/login" method="post">
      @csrf
      <a href="/"><img class="mb-4" src="https://i.ibb.co/PhCdmqZ/logo.png" alt="" width="auto" height="72"></a>
      @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
        </div>
      @endif
      @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
        </div>
      @endif
      <h1 class="h3 mb-3 font-weight-normal fs-5">Please Sign In</h1>
      <div class="form-floating">
        <input type="top" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username" autofocus >
        <label for="username">Username</label>
        @error('username')
        <div class="invalid-feedback text-start">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" >
        <label for="password">Password</label>
        @error('password')
        <div class="invalid-feedback text-start">
          {{ $message }}
        </div>
        @enderror
      </div>
      <button class="btn btn-md btn-dark btn-block py-1 px-4 mt-3" type="submit">Sign in</button>
      <small class="d-block text-center mt-3">Don't have an account yet? <a href="/register" class="text-muted">Sign Up now!</a></small>
      <small class="mt-5 mb-3 text-muted fw-light">© 2022 - Aplikasi Berbasis Platform</small>
    </form>
  </div>
</body>
</html>