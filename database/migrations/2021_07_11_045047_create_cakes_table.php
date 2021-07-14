<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCakesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cakes', function (Blueprint $table) {
            $table->increments('orderid');
            $table->string('name');
            $table->string('phoneno',10);
            $table->unsignedBigInteger('f_id')->nullable();
            $table->foreign('f_id')->references('id')->on('items')->onDelete('set null');
            $table->unsignedBigInteger('t_id')->nullable();
            $table->foreign('t_id')->references('id')->on('items')->onDelete('set null');
            $table->integer('quantity');
            $table->integer('totalcost');
            $table->boolean('completed');
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
        Schema::dropIfExists('cakes');
    }
}
