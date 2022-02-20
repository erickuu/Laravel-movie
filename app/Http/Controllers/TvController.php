<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TvController extends Controller
{
 public function show($id)
    {
        $tvs = Http::withToken(config('services.tmdb.token'))
        ->get("https://api.themoviedb.org/3/tv/".$id."?&append_to_response=videos,images,credits")
        ->json();        
        return view('tvShow',[
            'tvs'=> $tvs
        ]);


    }
}
