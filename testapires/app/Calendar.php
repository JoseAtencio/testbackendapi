<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $table = 'calendars';
    
    protected $fillable = [

        "id",
		"calendar_id",
		"name",
		"updated_at",
		"created_at"

    ];

    
    public function routes_data()
    {
        return $this->hasMany('App\Routes_data', 'calendar_id');
    }

    
    public function days_disabled()
    {
        return $this->hasMany('App\Disabled_days', 'calendar_id');
    }
}
