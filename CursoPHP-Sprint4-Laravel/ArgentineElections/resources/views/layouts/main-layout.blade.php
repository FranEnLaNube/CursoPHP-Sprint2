<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @yield('css')

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <title>Argentine Elections Results</title>
</head>

<body class=" h-screen flex flex-col">
    <header class="bg-gray-800 text-white font-bold py-2 px-4">
        <nav class="flex justify-between items-center">
            <a href="/"
                class="home-link bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded">Home</a>
            @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class=" bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 mx-2 rounded">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class=" bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 mx-2 rounded">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class=" bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 mx-2 rounded">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </nav>
    </header>
    <ul class="flex">
        <li class="flex-1 mb-1">
            <a class="py-2 px-4 text-center block border-2 rounded-b font-bold border-blue-500
                {{ request()->is('results*')
                    ? 'bg-blue-500 text-white hover:bg-blue-700 hover:border-blue-700'
                    : 'text-blue-500 bg-white hover:bg-blue-200' }}"
                href="/results">General results</a>
        </li>
        <li class="flex-1 mb-1 mx-1">
            <a class="py-2 px-4 text-center block border-2 rounded-b font-bold border-blue-500
                {{ request()->is('elections*')
                    ? 'bg-blue-500 text-white hover:bg-blue-700 hover:border-blue-700'
                    : 'text-blue-500 bg-white hover:bg-blue-200' }}"
                href="/elections">Elections</a>
        </li>
        <li class="flex-1 mb-1 mx-1">
            <a class="py-2 px-4 text-center block border-2 rounded-b font-bold border-blue-500
                {{ request()->is('alternatives*')
                    ? 'bg-blue-500 text-white hover:bg-blue-700 hover:border-blue-700'
                    : 'text-blue-500 bg-white hover:bg-blue-200' }}"
                href="/alternatives">Candidates</a>
        </li>
        <li class="flex-1 mb-1">
            @auth
                <a class="py-2 px-4 text-center block border-2 rounded-b font-bold border-blue-500
                {{ request()->is('votes*')
                    ? 'bg-blue-500 text-white hover:bg-blue-700 hover:border-blue-700'
                    : 'text-blue-500 bg-white hover:bg-blue-200' }} "
                    href="/votes/create">Votes manager</a>
            @else
                <a class="py-2 px-4 text-center block border-2 rounded-b font-bold border-blue-500 cursor-not-allowed
                    {{ request()->is('votes*')
                        ? 'bg-blue-500 text-white hover:bg-blue-700 hover:border-blue-700'
                        : 'text-blue-500 bg-white hover:bg-blue-200' }}"
                    onclick="return alert('You need to be logged in to access here')">Votes manager</a>
            @endauth
        </li>
    </ul>


    <main class="flex-grow">
        @yield('content')
    </main>
    <footer class="bg-gray-800 text-white p-3 text-center mt-auto">
        &copy; <?= date('Y') ?> Argentine Elections Results
    </footer>
</body>

</html>
