<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryAdressTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_adresses', function ($table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('id', true); //yorum kimliği "integer unsigned auto_increment"
           // $table->integer('adress_id'); //ileti kimliği "integer"
            $table->string('name', 255)->nullable(); //gönderenin ip adresi "varchar(15)"
 
            $table->timestamps(); //oluşturulma ve düzenlenme tarihi "timestamp"
          //  $table->foreign('adress_id')->references('adress_id')->on('adress')->onDelete('cascade');
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
