<?php

namespace App\Http\Requests\Book;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // 誰でもリクエストできるようにする
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * https://readouble.com/laravel/10.x/ja/validation.html
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:255'
        ];
    }
}
