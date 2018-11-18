<?php

namespace App\Http\Resources\News;

use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
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
            'title' => $this->title,
            'news' => $this->news,
            'resume' => $this->resume,
            'img_url' => $this->img_url,
            'rate' => $this->reviews->count() > 0 ?
                round($this->reviews->sum('rate')/$this->reviews->count(),2)
                : 0,
            'href' => [
                'author' => route('user.show', $this->user_id),
                'category' => route('category.show', $this->category_id),
               // 'review' => route('reviews.show', $this->id),
            ],
        ];
    }
}
