<?php

namespace App\Http\Resources\V1;

use App\Models\Session;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'loungeId' => $this->lounge_id,
            'tableId' => $this->table_id,
            'sessionId' => $this->session_id,
            'sum' => $this->sum,
            'status' => $this->status,
            'closed' => $this->closed,
            'session' => (new SessionResource($this->whenLoaded('session'))),
            'inOrder' => InOrderResource::collection($this->whenLoaded('inOrder')),
            'mixes' => MixResource::collection($this->whenLoaded('mixes')),
        ];
    }
}
