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
                class="home-link bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Home</a>
        </nav>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>
    {{-- TODO: Add a footer component--}}
    <footer class="bg-gray-800 text-white p-3 text-center mt-auto">
        &copy; <?= date('Y') ?> Argentine Elections Results
    </footer>
</body>

</html>
