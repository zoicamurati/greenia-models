<?php

namespace Greenia\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsurnaceContractor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'surname',
        'gender',
        'fiscal_code',
        'phone',
        'email',
        'date_of_birth',
        'country_of_birth_code',
        'province_of_birth_code',
        'commune_of_birth_code',
        'born_abroad',
        'residence_province_code',
        'residence_commune_code',
        'postal_code',
        'address',
        'house_number',
        'civil_status_id',
        'education_level_id',
        'profession_id',
        'driving_license_year',
        'contractor_is_owner'
    ];

    public function request()
    {
        $this->belongsTo(InsuranceRequest::class);
    }
}
