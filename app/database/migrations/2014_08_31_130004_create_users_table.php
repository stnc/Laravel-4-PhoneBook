<?php

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
        Schema::create('users', function ($table) {
		   $table->engine = 'MyISAM';
            $table->unsignedInteger('user_id', true);
            $table->string('username', 100)->unique();
            $table->string('password', 100);
            $table->string('email')->unique();
            $table->enum('level', array('Admin', 'Moderator')); //kullanıcı seviyesi. "enum('Admin', 'Moderator')"
            $table->string('remember_token');
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
        //
    }

}
