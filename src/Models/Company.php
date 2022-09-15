<?php

namespace Greenia\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','logo','status','end_point','end_point_type','username','password'
    ];
}
