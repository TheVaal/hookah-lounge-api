<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreSessionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'accessCode' => ['required'],
            'ownerId' => ['required'],
            'loungeId' => ['required'],
            'status' => ['required', Rule::in(['BD', 'PO', 'PD', 'bd', 'po', 'pd'])],
            'bookingDate' => ['required']
        ];
    }

    protected function prepareForValidation(){
        $this-> merge([
            'lounge_id' => $this->loungeId,
            'booking_date' => $this->bookingDate,
            'owner_id' => $this->ownerId,
        ]);
    }
}
