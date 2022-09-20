<?php

namespace Greenia\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuotationData extends Model
{
    use HasFactory;

    protected $fillable = [
        'quotation_id',
        'premium_amount',
        'taxes_amount',
        'total_amount',
        'cu',
        'bersani',
        'insured_sum_id',
        'road_assistance_premium_amount',
        'road_assistance_taxes_amount',
        'road_assistance_total_amount',
        'fire_premium_amount',
        'fire_taxes_amount',
        'fire_total_amount',
        'theft_premium_amount',
        'theft_taxes_amount',
        'theft_total_amount',
        'social_political_events_premium_amount',
        'social_political_events_taxes_amount',
        'social_political_events_total_amount',
        'natural_events_premium_amount',
        'natural_events_taxes_amount',
        'natural_events_total_amount',
        'total_premium_amount',
        'total_taxes_amount',
        'total_service_amount',
        'amount',
    ];

}
