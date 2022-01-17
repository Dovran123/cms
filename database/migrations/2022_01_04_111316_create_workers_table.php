<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->string('adresa');
            $table->string('postcode');
            $table->bigInteger('uzivatel_fk',false,true);
            $table->string('state');
            $table->string('education');
            $table->string('coutry');
            $table->string('region');
            $table->string('image')->nullable();
            $table->foreign('uzivatel_fk')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('workers');
    }
}
