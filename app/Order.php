<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $fillable = ['user_id','address', 'phone', 'total', 'decription'];
    /**
     * Get the post that owns the comment.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    /**
     * Get the post that owns the comment.
     */
    public function data()
    {
        return $this->hasMany('App\Orderdata', 'order_id');
    }
}
