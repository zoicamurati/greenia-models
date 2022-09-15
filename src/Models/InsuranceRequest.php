<?php

namespace Greenia\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'request_token',
        'product_id',
        'ip',
        'source',
        'user_id',
        'broker_company_id',
        'broker_agent_id'
    ];


    public function product()
    {
        $this->belongsTo(Product::class, 'product_id');
    }

    public function vehicleContracors()
    {
        $this->hasOne(InsurnaceContractor::class, 'request_id', 'id' );
    }

    public function autoData()
    {
        $this->hasOne(InsuranceRequestAuto::class, 'request_id', 'id');
    }

    public function user()
    {
        $this->belongsTo(User::class, 'user_id');
    }

    public function brokerAgent()
    {
        $this->belongsTo(User::class, 'broker_agent_id');
    }

    public function brokerCompany()
    {
        $this->belongsTo(User::class, 'broker_company_id');
    }

}
