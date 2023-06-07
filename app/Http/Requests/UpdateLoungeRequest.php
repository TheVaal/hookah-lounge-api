<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLoungeRequest extends FormRequest
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
                'name' => ['required'],
                'address' => ['required'],
                'city' => ['required'],
                'state' => ['required'],
                'postalCode' => ['required'],
                'country' => ['required'],
            ];
        } else {
            return [
                'name' => ['sometimes', 'required'],
                'address' => ['sometimes','required'],
                'city' => ['sometimes','required'],
                'state' => ['sometimes','required'],
                'postalCode' => ['sometimes','required'],
                'country' => ['sometimes','required'],
            ];
            
        }
    }

    protected function prepareForValidation(){
        if ($this-postalCode) {
            $this-> merge([
                'postal_code' => $this->postalCode,
            ]);
        }
    }
}
