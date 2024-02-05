<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PackageRequest extends FormRequest
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
            'packageName' => 'required|string|max:255',
            'weekDayPrice' => 'required|numeric|between:0,999999999.99', // Adjust the range as needed
            'saturdayPrice' => 'required|numeric|between:0,999999999.99', // Adjust the range as needed
            'sundayPrice' => 'required|numeric|between:0,999999999.99', // Adjust the range as needed
        ];
    }
}
