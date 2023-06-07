<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLoungeMenuRequest extends FormRequest
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
            'menuId' => ['required'],
            'loungeId' => ['required'],
            'price' => ['required'], 
        ];
    }

    protected function prepareForValidation(){
        $this-> merge([
            'menu_id' => $this->menuId,
            'lounge_id' => $this->loungeId,
        ]);
    }
}
