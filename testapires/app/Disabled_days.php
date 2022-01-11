<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disabled_days extends Model
{
    protected $table = 'days_disabled';
    
    protected $fillable = [
        "id",
		"calendar_id",
		"day",
		"enabled",
		"updated_at",
		"created_at"
    ];


  
    public function calendar()
    {
        return $this->belongsTo('App\Calendar', 'calendar_id');
    }


}
