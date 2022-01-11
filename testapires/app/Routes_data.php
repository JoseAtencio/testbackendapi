<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Routes_data extends Model
{
    protected $table = 'route_data';
	
	protected $fillable = [
        "id",
		"route_id",
		"calendar_id",
		"vinculation_route",
		"route_circular",
		"date_init",
		"date_finish",
		"mon",
		"tue",
		"wed",
		"thu",
		"fri",
		"sat",
		"sun",
		"updated_at",
		"created_at",
    ];

	public function route()
	{
		return $this->belongsTo('App\Routes', 'route_id');
	}

	public function calendar()
	{
		return $this->belongsTo('App\Calendar', 'calendar_id');
	}
}
