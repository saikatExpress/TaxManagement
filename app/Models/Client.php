<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'assessment_year',
        'address',
        'mobile_no',
        'nid_no',
        'source_income',
        'circle_of_zone',
        'total_income',
        'net_wealth',
        'previous_net_wealth',
        'business_capital',
        'accretion_in_wealth',
        'non_agriculture_property',
        'agriculture_property',
        'investment',
        'motor_vehicle',
        'jewellery',
        'furniture',
        'electronic_equipment',
        'other_asset',
        'cash_in_hand',
        'liabilities',
        'family_expense',
        'source_of_fund',
        'payment',
        'register_number',
        'remarks',
        'submission_date',
        'status',
        'flag',
        'pdf_path',
    ];

    protected $casts = [
        'id'                       => 'integer',
        'name'                     => 'string',
        'assessment_year'          => 'string',
        'address'                  => 'string',
        'mobile_no'                => 'string',
        'nid_no'                   => 'string',
        'source_income'            => 'string',
        'circle_of_zone'           => 'string',
        'total_income'             => 'string',
        'net_wealth'               => 'string',
        'previous_net_wealth'      => 'string',
        'business_capital'         => 'string',
        'accretion_in_wealth'      => 'string',
        'non_agriculture_property' => 'string',
        'agriculture_property'     => 'string',
        'investment'               => 'string',
        'motor_vehicle'            => 'string',
        'jewellery'                => 'string',
        'furniture'                => 'string',
        'electronic_equipment'     => 'string',
        'other_asset'              => 'string',
        'cash_in_hand'             => 'string',
        'liabilities'              => 'string',
        'family_expense'           => 'string',
        'source_of_fund'           => 'string',
        'payment'                  => 'string',
        'register_number'          => 'string',
        'remarks'                  => 'string',
        'submission_date'          => 'string',
        'status'                   => 'string',
        'flag'                     => 'integer',
        'pdf_path'                 => 'string',
        'created_at'               => 'datetime',
        'updated_at'               => 'datetime',
        'deleted_at'               => 'datetime',
    ];
}
