<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLoungeTobaccoRequest extends FormRequest
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
                'tobaccoId' => ['required'],
                'loungeId' => ['required'],
                'price' => ['required'],   
            ];
        } else {
            return [
                'tobaccoId' => ['sometimes', 'required'],
                'loungeId' => ['sometimes', 'required'],
                'price' => ['sometimes', 'required'], 
            ];
            
        }
    }

    protected function prepareForValidation(){
        $validationArray = [
            'tobaccoId' => 'tobacco_id',
            'loungeId' => 'lounge_id'   
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
