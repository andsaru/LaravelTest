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

    <nav class="flex py-5 bg-indigo-500 text-white">
      <div class="w-1/2 px-12 mr-auto">
        <p class="text-2xl font-bold">Laravel Test</p>
      </div>

      <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
        <li>
          <a href="{{ route('login.index') }}" class="font-semibolt 
          hover:bg-indigo-700 py-3 px-4 rounded-md">Log In</a>
        </li>
      </ul>

    </nav>

    @yield('content')


  </body>