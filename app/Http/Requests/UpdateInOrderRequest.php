<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInOrderRequest extends FormRequest
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
        $method = $this->method();
        
        if ($method == 'PUT') {
            return [
                'orderId' => ['required'],
                'loungeMenuId' => ['required'],
                'quantity' => ['required'],
                'guestNumber' => ['required'],
            ];
        } else {
            return [
                'orderId' => ['sometimes', 'required'],
                'loungeMenuId' => ['sometimes', 'required'],
                'quantity' => ['sometimes', 'required'],
                'guestNumber' => ['sometimes', 'required'],
            ];
            
        }
    }

    protected function prepareForValidation(){
        
        $validationArray = [
            'orderId' => 'order_id',
            'loungeMenuId' => 'lounge_menu_id' ,
            'guestNumber' => 'guest_number' 
        ];
        $mergeArray = [];
        foreach($validationArray as $key => $field){
            if ($this[$key]){
                $mergeArray[$field] = $this[$key];
            }
            
        }
        $this-> merge($mergeArray);
        
    }
}
