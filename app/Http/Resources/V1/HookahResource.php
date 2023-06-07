<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class HookahResource extends JsonResource
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
            'mixId' => $this->mix_id,
            'weight' => $this->weight,
            'loungeTobaccoId' => $this->lounge_tobacco_id,
            'loungeTobacco' => (new LoungeTobaccoResource($this->loungeTobacco)),
        ];
    }
}
