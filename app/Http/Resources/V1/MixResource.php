<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class MixResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $includeDetails = $request->query('includeDetails');
        if ($includeDetails){
            $hookahs = $this->hookahs;  
        }
        return [
            'id' => $this->id,
            'orderId' => $this->order_id,
            'weight' => $this->weight,
            'hookahs' => HookahResource::collection($this->whenLoaded('hookahs')),
        ];
    }
}
