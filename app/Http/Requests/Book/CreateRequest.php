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
            'book' => 'required|max:255'
        ];
    }

    // Requestクラスのuser()メソッドは、認証済みのユーザーを返す
    // https://readouble.com/laravel/8.x/ja/requests.html#retrieving-the-authenticated-user
    public function userId(): int
    {
        return $this->user()->id;
    }

    public function getBookTitle(): string
    {
        return $this->input('book');
    }
}
