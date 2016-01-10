<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{

	protected $table = 'passenger';
    protected $guarded = ['id'];

    public function booking()
    	{
    		return $this->belongsTo('App\Booking','booking_id');
    	}
}