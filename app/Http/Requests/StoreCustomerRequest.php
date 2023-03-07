<?php

namespace App\Http\Requests;

use App\Models\Customer;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'type' => [
                'required',
                Rule::in([
                    Customer::TYPE_INDIVIDUAL,
                    Customer::TYPE_BUSINESS,
                ])
            ],
            'email' => ['required', 'email'],
            'country' => ['required'],
            'city' => ['required'],
            'address' => ['required'],
            'postalCode' => ['required'],
        ];
    }

    /**
     * @return void
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'postal_code' => $this->postalCode,
        ]);
    }
}
