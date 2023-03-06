<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://fonts.googleapis.com/css?family=Corben:700" rel="stylesheet">

        <!-- Styles -->
        @livewireStyles
        <link rel="stylesheet" href="{{ asset('/assets/css/dashboard.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/create.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/edit.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/comment.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/writein.css') }}">
        <script src="{{ asset('/assets/js/app.js') }}"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen command_head">
            <div class="container">
                <div class="row command">
                    <div class="col-6 col-sm-7"><p>Mite.Meal</p></div>
                    <form action="{{ route('bord.keyword') }}" method="get" class="col-4 col-sm-2 command_search">
                        @csrf
                        <label for="inputPassword5" class="form-label"></label>
                        <input type="text" id="inputPassword5" class="form-control" name="keyword">
                        <input type="submit" class="btn btn-primary" value="検索">
                    </form>
                    <div class="col-2 col-sm-2 command_select">@livewire('navigation-menu')</div>
                </div>
            </div>

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')
        @livewireScripts
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>
