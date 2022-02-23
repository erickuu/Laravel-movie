  <section class="flex items-center justify-start w-screen h-screen bg-fixed bg-center bg-no-repeat  mx-auto" style="background-image: url({{ 'https://image.tmdb.org/t/p/original/'. $movies['poster_path'] }});" >
        <div class="w-2/4 info text-black shadow-white bg-white opacity-50 px-8 py-4">
            <h2 class="text-4xl font-bold leading-relaxed ">{{ $movies['original_title'] }}</h2>
            <h3 class="text-base leading-relaxed"><i class="fa-solid fa-thumbs-up text-black mr-2"></i> <strong>Recomendations</strong></h3>
            <span class="text-base"><i class="fa-solid fa-circle-play mr-3 text-center text-black"></i><strong>{{ $movies['vote_average'] * 10 . "%" }} -  {{ \Carbon\Carbon::parse($movies['release_date'])->format('M d, Y') }}</strong></span>
            <p class="text-base"> {{ $movies['overview']}} </p>
        </div>
  </section>