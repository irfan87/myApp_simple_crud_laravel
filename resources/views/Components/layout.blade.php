<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Store</title>

        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net"> --}}
        {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}

        {{-- bootstrap css --}}
        <link href="{{ asset('vendor/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-secondary">
            <div class="container-fluid">
                {{-- <a class="navbar-brand" href="{{ url('/') }}" aria-current="active">My Store</a> --}}
                <x-nav-link href="/" class="navbar-brand" :active="request()->is('/')">My Store</x-nav-link>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <x-nav-link href="/products" class="nav-link" :active="request()->is('products')">Products</x-nav-link>
                    </li>
                </ul>
                </div>
            </div>
        </nav>            
        <div class="container">
			{{ $slot }}
        </div>
    </body>
    {{-- bootstrap js and dependencies --}}
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</html>
