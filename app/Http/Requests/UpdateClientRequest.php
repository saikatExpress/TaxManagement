<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
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
            'name'                     => ['nullable'],
            'address'                  => ['nullable'],
            'mobile_no'                => ['nullable'],
            'source_income'            => ['nullable'],
            'total_income'             => ['nullable'],
            'tax_paid'                 => ['nullable'],
            'business_capital'         => ['nullable'],
            'non_agriculture_property' => ['nullable'],
            'investment'               => ['nullable'],
            'jewellery'                => ['nullable'],
            'electronic_equipment'     => ['nullable'],
            'cash_in_hand'             => ['nullable'],
            'family_expense'           => ['nullable'],
            'payment'                  => ['nullable'],
            'remarks'                  => ['nullable'],
            'assessment_year'          => ['nullable'],
            'tin_no'                   => ['nullable'],
            'nid_no'                   => ['nullable'],
            'circle_of_zone'           => ['nullable'],
            'net_wealth'               => ['nullable'],
            'previous_net_wealth'      => ['nullable'],
            'accretion_in_wealth'      => ['nullable'],
            'agriculture_property'     => ['nullable'],
            'motor_vehicle'            => ['nullable'],
            'furniture'                => ['nullable'],
            'other_asset'              => ['nullable'],
            'liabilities'              => ['nullable'],
            'source_of_fund'           => ['nullable'],
            'register_number'          => ['nullable'],
            'submission_date'          => ['nullable'],
        ];
    }
}
