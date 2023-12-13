<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BoardRequest extends FormRequest
{
    public function authorize(): bool
    {
        if ($this->path() == 'board')
        {
            return true;
        } else {
            return false;
        }
    }

    public function rules(): array
    {
        return [
            'comment' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'comment.required' => '入力してください',
        ];
    }
}
