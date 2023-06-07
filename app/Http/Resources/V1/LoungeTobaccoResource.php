<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class LoungeTobaccoResource extends JsonResource
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
            'id' => $this->id,
            'tobaccoId' => $this->tobacco_id,
            'loungeId' => $this->lounge_id,
            'price' => $this->price,
            'tobacco' => new TobaccoResource($this->tobacco),
        ];
    }
}
