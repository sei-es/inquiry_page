<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BoardsRequest extends FormRequest
{
    public function authorize(): bool
    {
        if ($this->path() == 'boards')
        {
            return true;
        } else {
            return false;
        }
    }

    public function rules(): array
    {
        return [
            'title' => 'required',
            'story' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'タイトルを入力してください',
            'story.required' => 'コメントを入力してください'
        ];
    }
}
