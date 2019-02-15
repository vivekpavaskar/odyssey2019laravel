<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('email',50)->unique();
            $table->string('password',100);
            $table->string('fname',50);
            $table->string('lname',50);
            $table->string('mobile',15);
            $table->string('usn',11);
            $table->string('sem',2);
            $table->string('college');
            $table->string('acctype',10); //u-user a-admin r-registrationTeam eventCode-eventCoordinators
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
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
