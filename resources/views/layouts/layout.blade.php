<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400&family=Poppins:wght@100;200;400&family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Calistoga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:ital@1&display=swap" rel="stylesheet">
    <!-- Styles -->
    @livewireStyles
    @stack('styles')

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/navigation.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
    <div class="wrapper" id="app">
        <x-navigation></x-navigation>
            @yield('content')
        <x-footer />
        <client-chat-component source={{asset('assets/images/karsten-winegeart-KSqfFHtHpro-unsplash.jpg')}}></client-chat-component>
    </div>    

    @livewireScripts
    <!-- jquery -->
    <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
    <!-- font awesome -->
    <script src="{{ asset('assets/js/all.min.js') }}"></script>
    <script src="{{ asset('assets/js/navigation.js') }}" async></script>
    
     @if (session()->has('success'))
        <script>
            swal({
                title: "Congratulation!",
                text: @json(session('success')),
                icon: "success",
                button: "thanks!",
            });
        </script>
    @endif
    @if ($errors->has('error'))
        <script>
            swal({
                title: "Error",
                text: @json($errors->error),
                icon: "error",
                button: "close",
            });
        </script>
    @endif
    @stack('scripts')
</body>
</html>