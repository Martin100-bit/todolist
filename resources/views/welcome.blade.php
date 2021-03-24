@extends('layouts.layouts')
    
@section('content')
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

    <body>         
            <div class="content">
                <div class="title m-b-md">
                    <h2>MyTo-DoList</h2>
                    <img src=img/todo.jpg alt="todo image"> <br />
                    <i> Get It Done! </i>
                </div>
                    <p class="mssg"> {{ session('mssg')}}</p>
                    <a href="/create"> CLICK HERE TO MAKE NEW LIST </a>
                </div>
        </div>
    </body>        
@endsection