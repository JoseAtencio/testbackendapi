<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "first_name",
        "last_name" ,
        'email', 
        'password',
        "phone_number",
        "picture",
		"remember_token",
        "last_online",
        "verification_code",
        "new_email",
		"status",
        "first",
        "last_accept_date",
        "created","modified",
        "company_contact",
        "credits",
        "first_trip",
        "incomplete_profile",
        "phone_verify",
        "token_auto_login",
        "user_vertical",
        "language_id",
        "no_registered",
        "deleted_at"
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
