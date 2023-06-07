<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSessionRequest extends FormRequest
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
                'accessCode' => ['required'],
                'ownerId' => ['required'],
                'loungeId' => ['required'],
                'status' => ['required', Rule::in(['BD', 'PO', 'PD', 'bd', 'po', 'pd'])],
                'bookingDate' => ['required']
            ];

        } else {
            return [
                'accessCode' => ['sometimes', 'required'],
                'ownerId' => ['sometimes', 'required'],
                'loungeId' => ['sometimes', 'required'],
                'status' => ['sometimes', 'required', Rule::in(['BD', 'PO', 'PD', 'bd', 'po', 'pd'])],
                'bookingDate' => ['sometimes', 'required']
        ];}
    }

    protected function prepareForValidation(){
        $validationArray = [
            'bookingDate' => 'booking_date',
            'loungeId' => 'lounge_id',
            'ownerId' => 'owner_id',   
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
