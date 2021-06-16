<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'uname' => 'required',
            'password'=> 'required|min:5'
        ];
    }

    public function messages(){
        return [
            'uname.required' => 'cant left empty..',
            'password.min' =>'at least 5 char..',
        ];
    }
}
