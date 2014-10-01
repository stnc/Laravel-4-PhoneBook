<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonebooksTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phonebooks', function ($table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('adress_id', true);
            $table->integer('user_id')->nullable();
			$table->integer('category_id');
            $table->string('name', 255)->nullable();
			$table->string('lastname', 255)->nullable();
			$table->string('phone', 255)->nullable();
			$table->string('email', 255)->nullable();
            $table->text('notes')->nullable();
            $table->boolean('published');
            $table->timestamps(); //oluşturulma ve düzenlenme tarihi "timestamp"
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade'); //bu tablodaki user_id isimli alanın, users tablosundaki user_id alanını temsil ettiğini belirtiyoruz.
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
