<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css')}}"> --}}

    {{-- Tailwind CSS Link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <title>@yield('title') - Sitio Web</title>
  </head>
  <body class="bg-gray-100 text-gray-800">

    <nav class="flex py-5 bg-indigo-500 text-white">
      <div class="w-1/2 px-12 mr-auto">
        <p class="text-2xl font-bold">SitioWeb</p>
      </div>
      

      <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
      @if (auth()->check())
        <li class="mx-6">
          <p class="text-xl">Bienvenido <b>{{auth()->user()->name}}</b></p>
        </li>
        <li>
          <a href="{{ route('login.destroy') }}" class="font-semibold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700">Log Out</a>
        </li>
      @else 
        <li class="mx-6">
          <a href="{{ route('login.index') }}" class="font-semibold py-3 px-4 rounded-md hover:bg-indigo-700">Log In</a>
        </li>
        <li>
          <a href="{{ route('register.index') }}" class="font-semibold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700">Registrarse</a>
        </li>
      @endif
      </ul>

    </nav>

    @yield('content')
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>