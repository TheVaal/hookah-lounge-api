<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class InOrderResource extends JsonResource
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
            $loungeMenu = $this->loungeMenu;  
        }
        return [
            'id' => $this->id,
            'orderId' => $this->order_id,
            'loungeMenuId' => $this->lounge_menu_id,
            'quantity' => $this->quantity,
            'guestNumber' => $this->guest_number,
            'loungeMenu' => (new LoungeMenuResource($this->whenLoaded('loungeMenu')))
    ];
    }
}
