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
</head>
<body class="font-sans bg-white-900 text-white">
        @foreach($popularMovies as $movies) 
            @if($loop->index < 1)           
<section class="flex items-center justify-start w-screen h-screen bg-fixed bg-center bg-no-repeat  mx-auto" style="background-image: url({{ 'https://image.tmdb.org/t/p/original/'. $movies['poster_path'] }});" >
        <div class="w-2/4 info text-black shadow-white bg-white opacity-50 px-8 py-4">
            <h2 class="text-4xl font-bold leading-relaxed ">{{ $movies['original_title'] }}</h2>
            <h3 class="text-base leading-relaxed"><i class="fa-solid fa-thumbs-up text-black mr-2"></i> <strong>Recomendations</strong></h3>
            <span class="text-base"><i class="fa-solid fa-circle-play mr-3 text-center text-black"></i><strong>{{ $movies['vote_average'] * 10 . "%" }} -  {{ \Carbon\Carbon::parse($movies['release_date'])->format('M d, Y') }}</strong></span>
            <p class="text-base"> {{ $movies['overview']}} </p>
        </div>
</section>
            @endif
        @endforeach 
    <nav class="border-b border-gray-800 shadow-xl">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="#">
                        <i class="fa-solid fa-meteor text-red-500"></i>
                    </a>
                </li>
                <li class="md:ml-16 mt-4 md:mt-0">
                    <a href="#" class="text-black hover:text-red-500">Movies</a>
                </li>
                <li class="md:ml-16 mt-4 md:mt-0">
                    <a href="#" class="text-black hover:text-red-500">TV shows</a>
                </li>
                <li class="md:ml-16 mt-4 md:mt-0">
                    <a href="#" class="text-black hover:text-red-500">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <div class="relative">
                    <i class="fa-solid fa-magnifying-glass text-black"></i>
                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1 mt-4 md:mt-0 focus:outline-none focus:shadow-outline" placeholder="Buscar">
                </div>
                <div class="md:ml-4 mt-4 md:mt-0">
                    <a href="">
                        <img src="" alt="">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>