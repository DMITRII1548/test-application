<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TestResourse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $request->id,
            'title' => $request->title,
        ];
    }
    
}
