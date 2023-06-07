<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHookahRequest extends FormRequest
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
                'mixId' => ['required'],
                'weight' => ['required'],
                'loungeTobaccoId' => ['required'],
            ];
        } else {
            return [
                'mixId' => ['sometimes', 'required'],
                'weight' => ['sometimes', 'required'],
                'loungeTobaccoId' => ['sometimes', 'required'],
            ];
            
        }
    }

    protected function prepareForValidation(){
        $validationArray = [
            'mixId' => 'mix_id',
            'loungeTobaccoId' => 'lounge_tobacco_id'   
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
