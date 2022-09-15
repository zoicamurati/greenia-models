<?php

namespace Greenia\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrokerCompany extends Model
{
    use HasFactory;


    public function user()
    {
        $this->belongsTo(User::class, 'id');
    }

    public function agents()
    {
        $this->hasMany(BrokerAgent::class, 'id');
    }

}
