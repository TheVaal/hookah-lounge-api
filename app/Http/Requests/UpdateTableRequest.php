<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTableRequest extends FormRequest
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
                'loungeId' => ['required'],
                'name' => ['required'],
                'seats' => ['required'],
            ];
        } else {
            return [
                'loungeId' => ['sometimes', 'required'],
                'name' => ['sometimes', 'required'],
                'seats' => ['sometimes', 'required'],
            ];
            
        }
    }

    protected function prepareForValidation(){
        
        if ($this->loungeId) {
            $this-> merge([
                'lounge_id' => $this->loungeId,
            ]);
        }
    }
}
