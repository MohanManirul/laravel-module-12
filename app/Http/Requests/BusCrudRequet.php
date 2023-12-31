<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BusCrudRequet extends FormRequest
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
            "jurney_date" => "required",
            "bus_operators_id" => "required",
            "bus_number" => "required|unique:buses,bus_number,".$this->id,
            "bus_registration_number" => "required|unique:buses,bus_registration_number,".$this->id,
            "image" => "image|mimes:jpeg,jpg,png,gif,svg|max:2048",
        ];
    }
}
