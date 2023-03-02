<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Bagian SEO --}}
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    {{-- Bagian SEO --}}
    <title>{{ env('APP_NAME') }} | Register</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/sign-in.css" rel="stylesheet">
</head>
<body class="text-center">

    <main class="form-signin w-100 m-auto">
        @if(session('failed'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('failed') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <form method="POST" action="/register">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Please Login</h1>
            <div class="form-floating">
                <input type="text" class="form-control form-signin rounded-top @error('name')
                    is-invalid
                @enderror" id="name" placeholder="Jhon Doe" value="{{ old('name') }}" name="name" required>
                @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
                <label for="name">Name</label>
              </div>
            <div class="form-floating">
                <input type="email" class="form-control @error('email')
                    is-invalid
                @enderror" id="email" placeholder="name@example.com" name="email" value="{{ old('email') }}" required>
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" class="form-control @error('password')
                    is-invalid
                @enderror" id="floatingPassword" placeholder="Password" name="password" required>
                <label for="floatingPassword">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>


            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Sign in</button>
            <span class="d-block text-center text-capitalize">Do you a new member? <a href="/register" class="text-decoration-none text-dark">Register Account</a></span>

            <p class="mt-5 mb-3 text-muted">&copy; 2023 - {{ date('Y') }}</p>
        </form>
    </main>
</body>
</html>
