<?php

namespace Greenia\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleVersion extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'vehicle_model_id',
        'AM_code',
        'description',
        'full_description',
        'fuel_id',
        'year',
        'body_type_id',
        'category_id',
        'cubic_capacity',
        'last_registration',
        'sales_end_date',
        'first_registration',
        'sales_start_date',
        'month',
    ];

    public $timestamps = false;


    public function vehicleModel()
    {
        return $this->belongsTo(VehicleModel::class);
    }

}
