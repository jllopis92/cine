<?php

namespace Cine\Http\Requests;

use Cine\Http\Requests\Request;

class UserCreateRequest extends Request
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
            'name'=> 'required',
            'rut'=> 'required|unique:users',
            'email'=> 'required|unique:users',
            'password'=> 'required',
            'country'=> 'required',
            'city'=> 'required',
        ];
    }
}
