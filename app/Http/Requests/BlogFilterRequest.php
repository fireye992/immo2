<?php

namespace App\Http\Requests;

use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class BlogFilterRequest extends FormRequest
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
            'title' => ['required', 'min:4'],
            'slug' => ['required', 'min:4', 'regex:/^[0-9a-z\-]+$/'],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
        'slug' => $this->input('slug') ?: Str::slug($this->input('title'))
        ]);
    }
}
