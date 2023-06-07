<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTobaccoRequest extends FormRequest
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
            'manufacturer_id' => ['required'],
            'hardness_id' => ['required'],
            'taste' => ['required'],
        ];
    }

    protected function prepareForValidation(){
        $this-> merge([
            'manufacturer_id' => $this->manufacturerId,
            'hardness_id' => $this->hardnessId,
        ]);
    }
}
