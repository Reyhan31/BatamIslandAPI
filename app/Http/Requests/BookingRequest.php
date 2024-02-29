<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            // 'file_id' => 'required|string|max:255',
            'date' => 'required|date',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phoneNumber' => 'required|string|max:20', // Adjust max size as needed
            'packageName' => 'required|string|max:255',
            'price' => 'required|numeric|between:0,999999999.99', // Adjust the range as needed
        ];
    }
}
