<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWordRequest extends FormRequest
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
        return [
            'like' => 'min:3|nullable',
            'word' => 'required|min:2|alpha',
            'meaning' => 'nullable|min:2',
            'pronunciation' => 'nullable|file|mimes:mp3',
        ];
    }
}
