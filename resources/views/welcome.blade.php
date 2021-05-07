<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12" defer></script>
       
        <script src="{{ asset('js/custom.js') }}" defer></script>
    </head>
    <body class="antialiased">

        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

           

                   <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
                
            </div>
        </div> --}}
         
        <div class="max-w-full min-h-screen w-full h-full flex justify-center items-center">
        <div>
              <h1 class="ml5 text-5xl ">
                <span class="text-wrapper">
                    <span class="line line1"></span>
                    <span class="letters letters-left">SU Waddy</span>
                    <span class="letters ampersand">&amp;</span>
                    <span class="letters letters-right">Paper Production</span>
                    <span class="line line2"></span>
                </span>
                </h1>

<div class="login flex justify-center ">
                     @auth
                        <a href="{{ url('/dashboard') }}" class="text-lg text-gray-700 hover:text-yellow-500 ">Dashboard</a>
                     @else
                        <a href="{{ route('login') }}" class="text-lg text-gray-700 ">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-lg text-gray-700 ">Register</a>
                        @endif
                    @endauth
                </div>
                <div class="flex justify-center ">
                    <div>

                        <p class="my-3 text-lg font-bold developername  inline-block"></p>
                    </div>
                </div>

        </div>
    </div>
    </body>
    

</html>
