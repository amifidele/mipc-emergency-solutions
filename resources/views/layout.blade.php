<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MIPC Emergency Solutions</title>

        <!-- Fonts -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

        @yield('css')

        <!-- Styles -->
        <style>
          
          body{
            font-family: 'Open Sans', sans-serif;
          }
          h1{
            font-family: 'Open Sans', sans-serif;
          }

        </style>
    </head>
    <body class="bg-white-smoke">

        <div class="w-100 shadow fixed bg-white py-2 z-999">
            <div class="w-95 mx-auto flex pt-1 ">
                <div class="w-30">
                    <a class="" href="/">
                    <img src="{{ asset('images/logo.png') }}">
                    </a>
                </div>
                <div class="w-70 pt-4 pr-10 text-right text-grey-darkest">
                    <ul class="inline-block font-bold">
                        <li class="mx-4"><a class="no-underline text-grey-darkest" href="/">Home</a></li>
                        <li class="mx-4">How to use?</li>
                        <li class="mx-4"><a class="no-underline text-grey-darkest" href="{{ route('admin') }}">Administration</a></li>
                        <li class="mx-4">Notices</li>
                    </ul>
                </div>
            </div>
        </div>
        
        @yield('content')

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    </body>
    </html>