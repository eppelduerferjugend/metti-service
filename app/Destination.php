<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function items()
    {
        return $this->hasMany(Item::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
