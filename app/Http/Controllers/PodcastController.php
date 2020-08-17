<?php

namespace App\Http\Controllers;
use App\Models\Podcast;

class PodcastController extends Controller
{
    public function index()
    {
        $podcast = Podcast::get();
        return $podcast;
    }

    public function show($id)
    {
        $podcast = Podcast::find($id);
        return $podcast;
    }
}
