<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInOrderRequest extends FormRequest
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
            'orderId' => ['required'],
            'loungeMenuId' => ['required'],
            'quantity' => ['required'],
            'guestNumber' => ['required'],
        ];
    }

    protected function prepareForValidation(){
        $this-> merge([
            'order_id' => $this->orderId,
            'lounge_menu_id' => $this->loungeMenuId,
            'guest_number' => $this->guestNumber,
        ]);
    }
}
