<?php

namespace App\Http\Requests\Request;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UsuarioRequest extends FormRequest
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
            'nombres' => 'required|string|regex:/^[A-zÀ-ú\s]+$/',
            'apellidos' => 'required|string|regex:/^[A-zÀ-ú\s]+$/',
            'estado' => 'sometimes|boolean',
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users')->ignore($this->usuario->email ?? null),
            ],
            'password' => 'sometimes|required|string|min:8',
            'telefono' => [
                'required',
                'min:8',
                Rule::unique('users')->ignore($this->usuario->telefono ?? null),
            ],
            'dui' => [
                'required',
                'string',
                'regex:/^[0-9]{8}[-][0-9]{1}/',
                Rule::unique('users')->ignore($this->usuario->dui ?? null)
            ]
        ];
    }
    public function attributes()
    {
        return [
            'nombres' => 'Nombre',
            'apellidos' => 'Apellido',
            'estado' => 'Estado',
            'email' => 'Correo electronico',
            'password' => 'Contraseña',
            'telefono' => 'Telefono',
            'dui' => 'DUI',
            'rol_id' => 'Rol',
        ];
    }

    protected function prepareForValidation()
    {
        if ($this->method() == 'PUT' && is_null($this->password)) {
            $this->request->remove('password');
        }
    }

    public function withValidator(Validator $validator): void
    {
        $validator->after(function () {
            if ($this->method() == 'PUT' && !is_null($this->password)) {
                $this->merge(['password' => Hash::make($this->password)]);
            }
            $this->merge(['name' => $this->nombres . " " . $this->apellidos]);
        });
    }
}