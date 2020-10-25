<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laracasts Video Games</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body class="bg-gray-900 text-white">
    <header class="border-b border-gray-800">
        <nav class="container mx-auto flex items-center justify-between px-4 py-6">
            <div class="flex items-center">
                <a href="/">
                    <img src="/laracasts-negative-logo.svg" alt="laracasts" class="w-32 flex-none">
                </a>
                <ul class="flex ml-16 space-x-8">
                    <li><a href="#" class="hover:text-gray-400">Games</a></li>
                    <li><a href="#" class="hover:text-gray-400">Reviews</a></li>
                    <li><a href="#" class="hover:text-gray-400">Coming Soon</a></li>
                </ul>
            </div>
            <div class="flex items-center">
                <div class="relative">
                    <input type="text"
                           class="bg-gray-800 text-sm rounded-full focus:outline-none
                                    focus:shadow-outline w-64 px-3 pl-10 py-1"
                           placeholder="Search...">
                    <div class="absolute top-0 flex items-center h-full ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-search text-gray-400">
                            <circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/>
                        </svg>
                    </div>
                </div>
                <div class="ml-6">
                    <a href="#"><img src="/avatar.png" alt="avatar" class="rounded-full w-8"></a>
                </div>
            </div>
        </nav>
    </header>

    <main class="py-8">
        @yield('content')
    </main>

    <footer class="border-t border-gray-800">
        <div class="container mx-auto px-4 py-6">
            Powered by <a href="#" class="underline hover:text-gray-400">IGDB API</a>
        </div>
    </footer>

</body>
</html>
