<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->double('price');
            $table->double('size');
            $table->integer('persons');
            $table->integer('floor');
            $table->double('room_count');
            $table->string('google_maps')->nullable();
            $table->string('street');

            $table->unsignedBigInteger('location_id')->nullable();
            $table->unsignedBigInteger('property_type_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->tinyInteger('status')->default('1');
            $table->tinyInteger('special')->default('0');
            $table->timestamps();
            $table->foreign('property_type_id')->references('id')->on('property_types')
            ->onDelete('cascade');
 
       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
