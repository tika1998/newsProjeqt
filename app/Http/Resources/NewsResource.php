<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($news)
    {
        return [
            'id'                => $this->id,
            'category_id'       => $this->category_id,
            'title'             => $this->title,
            'short_description' => $this->short_description,
            'avatar'            => $this->avatar,
            'long_description'  => $this->long_description,
            'category'          => optional($this->category)->name
        ];
    }
}
