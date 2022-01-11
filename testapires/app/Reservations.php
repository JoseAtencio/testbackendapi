<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    protected $table = 'reservations';
    
    protected $fillable = [
        "id",
		"user_plan_id",
		"route_id",
		"track_id",
		"reservation_start",
		"reservation_end",
		"route_stop_origin_id",
		"route_stop_destination_id",
		"created_at",
		"updated_at",
		"deleted_at"
    ];



    
    public function userplans()
    {
        return $this->belongsTo('App\User_plans', 'user_plan_id');
    }

    public function route()
    {
        return $this->belongsTo('App\Routes', 'foreign_key', 'other_key');
    }

}   


