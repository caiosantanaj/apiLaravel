<?php

namespace App\Http\Resources\Review;

use Illuminate\Http\Resources\Json\Resource;

class ReviewCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'review' => $this->review,
            'rate' => $this->rate,
            'href' => [
                'user' => route('user.show', $this->user_id),
                'news' => route('news.show', $this->news_id),
            ]
        ];
    }
}
