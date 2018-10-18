<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'gender', 'email', 'password', 'address', 'phone'
    ];

   	public function comments()
   	{
   		return $this->hasMany('App\Comment');
   	}

    public function orders()
    {
      return $this->hasMany('App\Order');
    }
}
