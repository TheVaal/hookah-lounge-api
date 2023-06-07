<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTobaccoRequest extends FormRequest
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
                'manufacturer_id' => ['required'],
                'hardness_id' => ['required'],
                'taste' => ['required'],
            ];
        } else {
            return [
                'manufacturerId' => ['sometimes', 'required'],
                'hardnessId' => ['sometimes', 'required'],
                'taste' => ['sometimes', 'required'],
            ];
            
        }
    }

    protected function prepareForValidation(){
        $validationArray = [
            'manufacturerId' => 'manufacturer_id',
            'hardnessId' => 'hardness_id',  
        ];
        $mergeArray = [];
        foreach($validationArray as $key => $field){
            if ($this[$key]){
                $mergeArray[$field] = $this[$key];
            }
            
        }
        
    }
}
