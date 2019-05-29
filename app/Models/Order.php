<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   	protected $fillable = [
   		'status','total','code','user_id',
   	];
   	public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function orderdetails()
    {
    	return $this->hasMany('App\Models\Orderdetail');
    }
}
