<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disabled_days extends Model
{
    protected $fillable = [
        "id",
		"calendar_id",
		"day",
		"enabled",
		"updated_at",
		"created_at"
    ];
}
