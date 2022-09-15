<?php

namespace Greenia\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleFuel extends Model
{
    use HasFactory;

    protected $table = 'vehicle_fuels';

    protected $fillable = [
        'id',
        'name'
    ];

    public $timestamps = false;

    public function vehicleVersions()
    {
        return $this->hasMany(VehicleVersion::class);
    }

}
