<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MillionerQuestion extends JsonResource
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
            'model' => 'MillionerQuestion',
            'id' => $this->id,
            'question' => $this->question,
            'anwser1' => $this->anwser1,
            'anwser2' => $this->anwser2,
            'anwser3' => $this->anwser3,
            'anwser4' => $this->anwser4,
        ];
    }
}
