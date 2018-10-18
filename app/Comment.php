<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'content', 'number_rate', 'customer_id', 'product_id'
    ];

    public function customer()
    {
    	return $this->belongsTo('App\Customer');
    }

    public function product()
    {
    	return $this->belongsTo('App\Product');
    }
}
