<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App - Name @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
<header class="bg-white shadow-md p-4 flex justify-between items-center container mx-auto mt-6 rounded-lg">
    @if (Route::has('login'))
        <nav class="flex items-center justify-end gap-4">
            @auth
                <a
                    href="{{ url('/dashboard') }}"
                    class="inline-block px-5 py-1.5 rounded-sm text-sm leading-normal"
                >
                    Dashboard
                </a>
            @else
                <a
                    href="{{ route('login') }}"
                    class="inline-block px-5 py-1.5 rounded-sm text-sm leading-normal"
                >
                    Log in
                </a>

                @if (Route::has('register'))
                    <a
                        href="{{ route('register') }}"
                        class="inline-block px-5 py-1.5 border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                        Register
                    </a>
                @endif
            @endauth
        </nav>
    @endif
    <nav>
        <ul class="flex space-x-4">
            <li><a href="{{ route('blog') }}" class="text-gray-600 hover:text-gray-800">My Blog</a></li>
            <li><a href="{{ route('about') }}" class="text-gray-600 hover:text-gray-800">About Us</a></li>
            <li><a href="{{ route('contact') }}" class="text-gray-600 hover:text-gray-800">Contact</a></li>
        </ul>
    </nav>
</header>
 
<main class="container mx-auto mt-10 px-6 text-center">
    @yield('content')
</main>
<footer class="mt-10 py-6 bg-white text-center shadow-md">
    <p class="text-gray-600">&copy; 2025 Brand. All rights reserved.</p>
</footer>
 
</body>
</html>