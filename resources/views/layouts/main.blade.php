<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My School App | @yield('title')</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" type="text/css">
        <style>
            @stack('style')
        </style>
    </head>
    <body>
      <header class="container-fuild">
        @include('includes.header')
      </header>
      <div class="container" id="app">
          @yield('content')
      </div>
      <footer class="row">
          @include('includes.footer')
      </footer>

      <!-- Scripts -->
      <script src="{{ URL::asset('js/app.js') }}" charset="utf-8"></script>
      @stack('scripts')
    </body>
</html>
