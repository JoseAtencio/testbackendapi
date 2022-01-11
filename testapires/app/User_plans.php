<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_plans extends Model
{

	protected $table = 'user_plans';

    protected $fillable = [
        "id",
		"user_id",
		"currency_id",
		"next_user_plan_id",
		"start_timestamp",
		"end_timestamp",
		"renewal_timestamp",
		"renewal_price",
		"requires_invoice",
		"status",
		"created",
		"modified",
		"financiation",
		"status_financiation",
		"language",
		"nif",
		"business_name",
		"pending_payment",
		"date_max_payment",
		"proxim_start_timestamp",
		"proxim_end_timestamp",
		"proxim_renewal_timestamp",
		"proxim_renewal_price",
		"credits_return",
		"company_id",
		"cancel_employee",
		"force_renovation",
		"date_canceled",
		"amount_confirm_canceled",
		"credit_confirm_canceled",
		"cost_center_id"
    ];


	
	public function user()
	{
		return $this->belongsTo('App\User', 'user_id');
	}

	public function reservations()
	{
		return $this->hasMany('App\Reservations', 'user_plan_id');
	}
}
