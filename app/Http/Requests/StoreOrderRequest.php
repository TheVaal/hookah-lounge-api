<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreOrderRequest extends FormRequest
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
            'loungeId' => ['required'],
            'table_id' => ['required'],
            'session_id' => ['required'],
            'sum' => ['required'],
            'status' => ['required', Rule::in(['O','o','B','b','P','p','C','c'])],
            'closed' => ['required']
        ];
    }

    protected function prepareForValidation(){
        $this-> merge([
            'lounge_id' => $this->loungeId,
            'table_id' => $this->tableId,
            'session_id' => $this->sessionId,
        ]);
    }
}
