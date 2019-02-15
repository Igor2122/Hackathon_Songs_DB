<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
    @include('components.nav')
    <div class="jumbotron flex-column justify-content-center d-flex">
            @include('components.error')
        {{-- <div class="container"> --}}
          <h1 class="display-3">Watch it!</h1>
          @yield('content')
        </div>
      {{-- </div> --}}
    
    @include('components.footer')





    </body>
</html>