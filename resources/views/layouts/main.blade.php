<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/main.css">
    <livewire:styles/>    
</head>
<body class="overflow-x-hidden font-sans bg-white-900 text-white">
    <nav class="border-b border-gray-800 shadow-xl">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="#">
                        <i class="fa-solid fa-meteor text-red-500"></i>
                    </a>
                </li>
                <li class="md:ml-16 mt-4 md:mt-0">
                    <a href="{{ route('movies.index') }}" class="text-black hover:text-red-500">Movies</a>
                </li>
                
            </ul>
            <!-- Here  was navbar -->
        </div>
    </nav>
    @yield('content')
    <livewire:scripts/>
</body>
</html>