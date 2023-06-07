<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateOrderRequest extends FormRequest
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
                'tableId' => ['required'],
                'sessionId' => ['required'],
                'sum' => ['required'],
                'status' => ['required', Rule::in(['O','o','B','b','P','p','C','c'])],
                'closed' => ['required']
            ];
        } else {
            return [
                'loungeId' => ['sometimes', 'required'],
                'tableId' => ['sometimes', 'required'],
                'sessionId' => ['sometimes', 'required'],
                'sum' => ['sometimes', 'required'],
                'status' => ['sometimes', 'required', Rule::in(['O','o','B','b','P','p','C','c'])],
                'closed' => ['sometimes', 'required']
            ];
            
        }
    }

    protected function prepareForValidation(){
        $validationArray = [
            'tableId' => 'table_id',
            'loungeId' => 'lounge_id',
            'sessionId' => 'session_id',   
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
