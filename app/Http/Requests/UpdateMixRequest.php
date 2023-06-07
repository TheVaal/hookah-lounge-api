<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMixRequest extends FormRequest
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
                'weight' => ['required'],  
            ];
        } else {
            return [
                'orderId' => ['sometimes', 'required'],
                'weight' => ['sometimes', 'required'],
            ];
            
        }
    }

    protected function prepareForValidation(){
        if ($this->orderId) {
            $this-> merge([
                'order_id' => $this->orderId,
            ]);
        }
    }
    
}
