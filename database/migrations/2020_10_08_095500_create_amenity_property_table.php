<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateamenityPropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amenity_property', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id')->unsigned();
            $table->unsignedBigInteger('amenity_id')->unsigned();
            $table->tinyInteger('status')->default('1');
            $table->foreign('property_id')->references('id')->on('properties')
            ->onDelete('cascade');
            $table->foreign('amenity_id')->references('id')->on('amenities')
            ->onDelete('cascade');
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
        Schema::dropIfExists('amenity_property');
    }
}
