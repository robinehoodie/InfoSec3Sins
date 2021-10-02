{{-- This is the initial page of the website
    The 3 sins are located:
    1. app/Http/Controllers/Register.php -> Password are encrypted to ensure the user security
    2. Models, Controllers, Middleware and migrations are separated -> Models, Controllers and middleware
        are located in app/http , migrations are located in database
    3. app/Http/Controllers/Login.php -> For verification there are no values

    --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>

</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex item-center">
            <li>
                <a href="{{ route('dashboard')}}" class="p-3">Home</a>
            </li>
            <li>
                <a href="{{ route('dashboard')}}" class="p-3">Dashboard</a>
            </li>
            <li>
                <a href="{{ route('posts') }}" class="p-3">Post</a>
            </li>
        </ul>
        <ul class="flex item-center">
            @if(auth()->user())
                <li>
                    <a href="" class="p-3"> {{ auth()->user()->name }}</a>
                </li>

                <li>
                    <form action="{{ route('logout')}}" method="post" class="inline">
                        @csrf
                        <button type="submit" >Logout </button>
                    </form>

                </li>
            @else
                <li>
                    <a href="{{ route('login')}}" class="p-3">Login</a>
                </li>
                <li>
                    <a href="{{ route('register') }}" class="p-3">Register</a>
                </li>
            @endif



        </ul>
    </nav>
    @yield('content')
  

</body>
</html>
