<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class TobaccoResource extends JsonResource
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
            'manufacturerId' =>  $this->manufacturer_id,
            'hardnessId' => $this->hardness_id,
            'taste' => $this->taste,
            'manufacturer' =>  new ManufacturerResource($this->manufacturer),
            'hardness' => new HardnessResource($this->hardness),    
        ];
    }
}
