<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class UserSaveRequest extends FormRequest
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
            'dni' => 'required|unique:User|string|max:15',
            'email' => 'required|unique:User|string|max:30',
            'name' => 'required|string|max:50',
            'newsletter' => 'in:Yes,No',
            'captation' => 'required|in:web,telefónica,presencial',
            'address' => 'string|max:100',
            'postal_code' => 'string|max:15',
            'city' => 'string|max:30',
            'region' => 'string|max:30',
            'country' => 'string|max:30',
            'observation' => 'string|max:255',
        ];
    }
}