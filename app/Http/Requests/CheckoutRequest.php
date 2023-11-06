<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Define authorization logic here, e.g., check if the user has permission to perform this checkout.
        return true; // You can customize this based on your application's user roles and permissions.
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // Define validation rules for checkout related operations.
        return [
            'item_id' => 'required|exists:items,id',
            'quantity' => 'required|integer|min:1',
            'notes' => 'nullable|string',
            'checkout_date' => 'required|date',
        ];
    }
}
