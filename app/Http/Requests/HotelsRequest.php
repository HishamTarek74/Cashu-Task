<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class HotelsRequest extends FormRequest
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

            'from_date' => 'required|date_format:Y/m/d',
            'to_date' => 'required|date_format:Y/m/d',
            'city' => 'required|string|min:2|max:3',
            'adults_number' => 'required|integer|min:1',
            
        ];
    }


    
    /*
    **protected Method Tp Handle 
    **Validations Response Errors 
    */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
