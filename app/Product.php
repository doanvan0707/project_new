<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'category_id', 'description', 'unit_price', 'promotion_price', 'image', 'size'
    ];

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function order_details()
    {
        return $this->hasMany('App\Order_detail');
    }
}
