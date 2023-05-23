<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if ($this->path() == 'hello'){
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'mail' => 'email',
            //'age' => 'numeric|between:0,150',
            'age' => 'numeric|hello',
        ];
    }

    public function messages(){
        return [
            'name.requeired' => 'Input your name certainly.',
            'mail.email' => 'email has needed.',
            'age.numeric' => 'Age is numeric.',
            //'age.between' => '0<=Age<=150.',
            'age.hello' => 'Hello! Only even number can be input.',
        ];
    }
}
