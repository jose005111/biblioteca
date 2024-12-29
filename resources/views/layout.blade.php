<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">
        <link rel="stylesheet" href="{{asset('icon/css/all.css')}}">
    </head>
  <body>
      <div class="item1">
       <h1>
        <i class="fa fa-book-open"></i> BIBLIOTECA DA MEDIATECA DE BENGUELA</h1>
      </div>
      <div class="colum">
        <div class="item2">
           @yield('navlink')
        </div>
        <div class="item3">
            @yield('content')
        </div>
      </div>
      <script src="{{asset('js/script.js')}}"></script>
      <script src="{{asset('icon/js/all.js')}}"></script>
  </body>
</html>
