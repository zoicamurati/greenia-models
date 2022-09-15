<?php

namespace Greenia\Models\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function broker_agent()
    {
        return $this->hasOne(BrokerAgent::class);
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function broker_company()
    {
        return $this->hasOne(BrokerCompany::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user_type()
    {
        return $this->belongsTo(UserType::class,'user_type','id');
    }

    /**
     * Scope user that are broker company
     *
     * @param $query
     * @return mixed
     */
    public function scopeBrokerCompany($query)
    {
        return $query->where('user_type', '=', 3);
    }

    /**
     * Scope user that are broker agent
     *
     * @param $query
     * @return mixed
     */
    public function scopeBrokerAgent($query)
    {
        return $query->where('user_type', '=', 2);
    }

    /**
     * Scope user that are area manager
     *
     * @param $query
     * @return mixed
     */
    public function scopeAreaManager($query)
    {
        return $query->where('user_type', '=', 1);
    }

}
