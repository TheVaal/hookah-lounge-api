<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class SessionResource extends JsonResource
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
            'accessCode' => $this->accessCode,
            'ownerId' => $this->owner_id,
            'loungeId' => $this->lounge_id,
            'status' => $this->status,
            'bookingDate' => $this->booking_date
        ];
    }
}
