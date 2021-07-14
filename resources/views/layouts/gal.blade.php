<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SugarCrush') }}</title>
      <!-- Site Icons -->
   <link rel="shortcut icon" href="{{asset('img/favicon.png')}}" type="image/png" /> 

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    



    <!-- Styles -->
    <link href="{{ asset('css/crecake.css') }}" rel="stylesheet">
     <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{asset('css/gallery.css')}}">   
    
   
    
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                
            <div class="navbar-header">
                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="/">
                                        <img class="logo" src="https://www.graphicsprings.com/filestorage/stencils/61d5311f5bc4c989c24eb2db038b7857.png?width=150&height=150" alt="">
                                    </a>
                </div>              
             <h1>SugarCrush</h1>
</div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>

        
      
    </div>
   
</body>
</html>
