<!doctype html>
  <head>
    <!-- ... --->
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
   <title>@yield('title') - Laravel Test</title>
   
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <!-- ... --->
  <body class="bg-gray-100 text-gary-800">

    @yield('content')


  </body>