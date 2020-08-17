<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Podcast;

class PodcastTransformer extends TransformerAbstract
{
    public function transform(Podcast $podcast)
    {
        return [
            'id' => $podcast->id,
            'title' => $podcast->title,
            'description' => $podcast->description,
            'files' => $podcast->files,
            'created_at' => $podcast->created_at->toDateTimeString(),
            'created_at_humen' => $podcast->created_at->diffForHumans()
        ];
    }
}