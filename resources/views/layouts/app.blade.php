<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'BLOGGER')}}</title>
        
        {{-- Styles --}}
        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
      @include('inc.navbar')
      <div class="container">
        @yield('content')
      </div>
      {{-- Scripts --}}
      {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

    </body>
</html>