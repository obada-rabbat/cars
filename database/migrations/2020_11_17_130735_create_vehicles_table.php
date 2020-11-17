<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->text('descripton')->nullable();
            $table->double('price')->nullable();
            $table->boolean('is_available')->nullable();
            $table->enum('gear_type',['MANUAL','AUTOMATIC'])->nullable();
            $table->Integer('engine_force')->nullable();
            $table->Integer('manufactoring_year')->nullable();
            $table->boolean('is_new')->nullable();
            $table->string('logo')->nullable();
            $table->enum('fuel',['BENZEN','DIESEL'])->nullable();
            $table->enum('property',['AGENCY','TRANSFER_OWNERSHIP'])->nullable();
            $table->Integer('kilometrage')->nullable();
            $table->bigInteger('id_category')->unsigned();
            $table->foreign('id_category')->references('id')->on('categories')->onDelete('cascade');
            $table->bigInteger('id_brand')->unsigned();
            $table->foreign('id_brand')->references('id')->on('brands')->onDelete('cascade');
            $table->bigInteger('id_owner')->unsigned();
            $table->foreign('id_owner')->references('id')->on('owners')->onDelete('cascade');
            $table->bigInteger('id_color')->unsigned();
            $table->foreign('id_color')->references('id')->on('colors')->onDelete('cascade');
            $table->bigInteger('id_origin_country')->unsigned();
            $table->foreign('id_origin_country')->references('id')->on('origin__countries')->onDelete('cascade');
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
        Schema::dropIfExists('vehicles');
    }
}
