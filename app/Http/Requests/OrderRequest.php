<?php

namespace App\Http\Requests;

use App\Http\Controllers\HelperTrait;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    use HelperTrait;
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => $this->validationString,
            'email' => $this->validationEmail,
            'phone' => $this->validationPhone,
            'text' => $this->validationShortText
        ];
    }
}
