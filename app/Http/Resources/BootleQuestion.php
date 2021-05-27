<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BootleQuestion extends JsonResource
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
            'model' => 'BootleQuestion',
            'id' => $this->id,
            'question' => $this->question,
        ];
    }
}
