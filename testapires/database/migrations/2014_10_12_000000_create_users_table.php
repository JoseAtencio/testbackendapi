<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('phone_number');
            $table->string('picture')->nullable();
            $table->dateTime('last_online');
            $table->string('verification_code');
            $table->string('status');
            $table->string('first');
            $table->string('created');
            $table->string('modified');
            $table->string('company_contact');
            $table->string('credits');
            $table->string('first_trip');
            $table->string('incomplete_profile');
            $table->string('token_auto_login');
            $table->string('user_vertical');
            $table->string('language_id');
            $table->string('no_registered');
            $table->string('deleted_at');
          

            $table->timestamp('email_verified_at')->nullable();
            
            $table->rememberToken();
            $table->timestamps();
            /**
     
        
		"",
        "",
        "",
        "","",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "" 

             */
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
