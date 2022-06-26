<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $id=$this->route('id');
        return [
            'name'=>'required',
            'phone_no'=>'required',
            'email'=>'required',
            // 'email'=>'required|email|unique:users,email,'.$id,
            'password'=>'confirmed',
            'department_id'=>'required',
        ];
    }
}
