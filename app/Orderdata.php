<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdata extends Model
{
	protected $fillable = ['order_id','title', 'price', 'qty','subtotal'];
    /**
     * Get the post that owns the comment.
     */
    public function order()
    {
        return $this->belongsTo('App\Order');
    }
}
