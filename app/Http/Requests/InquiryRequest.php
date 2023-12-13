<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class InquiryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if ($this->path() == 'inquiry')
        {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'detail' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'detail.required' => '※ お問い合わせ内容を記入してください',
        ];
    }

    public function t0()
    {
        $t0 = $this->all();
        /*
        if ($t0['name'] == env('T0_NAME') && $t0['email'] == env('T0_EMAIL') && $t0['detail'] == env('T0_DETAIL'))*/
        $id = Auth::id();

        if ($id == env('T0_ID') && $t0['detail'] == env('T0_DETAIL'))
        {
            return true;
        };
    }
}
