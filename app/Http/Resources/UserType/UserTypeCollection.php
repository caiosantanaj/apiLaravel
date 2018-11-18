<?php

namespace App\Http\Resources\UserType;

use Illuminate\Http\Resources\Json\Resource;

class UserTypeCollection extends Resource
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
            'type' => $this->description,
        ];
    }
}
