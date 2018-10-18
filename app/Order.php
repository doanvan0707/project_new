<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_id', 'date_order', 'total', 'payment', 'note'
    ];

    public function customer()
    {
      return $this->belongsTo('App\Customer');
    }

    public function order_details()
    {
      return $this->hasMay('App\Order_detail');
    }
}
