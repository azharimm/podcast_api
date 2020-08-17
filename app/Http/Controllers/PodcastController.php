<?php

namespace App\Http\Controllers;
use App\Transformers\PodcastTransformer;
use App\Models\Podcast;

class PodcastController extends Controller
{
    public function index()
    {
        $podcasts = Podcast::latest()->paginate(2);
        
        return fractal($podcasts, new PodcastTransformer)->toArray();
    }

    public function show($id)
    {
        $podcast = Podcast::find($id);
        if($podcast ==  null) {
            return response(null, 404);
        }
        return fractal($podcast, new PodcastTransformer)->toArray();
    }
}
