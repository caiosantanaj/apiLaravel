<?php

namespace App\Http\Resources\Review;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'review' => $this->review,
            'rate' => $this->rate,
            'href' => [
                'user' => route('user.show', $this->user_id),
                'news' => route('news.show', $this->news_id),
            ],
        ];
    }
}
