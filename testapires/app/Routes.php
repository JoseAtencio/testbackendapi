<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Routes extends Model
{
    protected $fillable = [

        "id",
		"external_id",
		"invitation_code",
		"title",
		"start_timestamp",
		"end_timestamp"

    ];
}
