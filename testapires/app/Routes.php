<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Routes extends Model
{
    
	protected $table = 'routes';
	
	protected $fillable = [

        "id",
		"external_id",
		"invitation_code",
		"title",
		"start_timestamp",
		"end_timestamp"

    ];


	public function reservation()
	{
		return $this->hasMany('App\Reservations', 'route_id');
	}

	public function data()
	{
		return $this->hasOne('App\Routes_data', 'route_id');
	}

	

}
