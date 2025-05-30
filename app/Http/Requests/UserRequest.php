<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

   $userId= $this->route('user');

        return [
            'name' => 'required',
            'date' => 'required|date',
            'time' => 'required|date',
        ];
    }
    public function messages():array
    {
        return[
            'name.required' => 'Campo nome é obrigatório!',
            'email.required' => 'Campo email é obrigatório!',
            'password.required' => 'Campo senha é obrigatório!',
            'date.required' => 'Campo data é obrigatótio!',
            'time.required' => 'Campo horário é obrigatório',

        ];

    }

}
