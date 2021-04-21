<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PessoaRequest extends FormRequest
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
            'name' =>'required|min:3|max:120',
            'cpf' =>'required',
            'email' =>'required|max:120',
            'data_nasc' =>'required',
            'nationality' =>'required|max:80'
        ];
    }
    public function messages()
    {
        return [
            'name.required' =>'O campo nome é obrigatório',
            'name.min:3' =>'O campo nome não pode possuir menos de 3 caracteres',
            'namemax:120' =>'O campo nome não pode possuir mais de 120 caracteres',
            'cpf.required' =>'O campo CPF é obrigatório',
            'email.required' =>'O campo e-mail é obrigatório',
            'email.max:120' =>'O campo e-mail não pode possuir mais de 120 caracteres',
            'data_nasc.required' =>'A data de nascimento é obrigatória',
            'nationality.required' =>'O campo nacionalidade é obrigatório',
            'nationality.max:80' =>'O campo nacionalidade não pode possuir mais de 80 caracteres'
        ];
    }
}
