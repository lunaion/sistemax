<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarrantiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warranties', function (Blueprint $table) {
            $table->id();
            /* $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('category_id');
            $table->string('ticket_int')->unique();
            $table->string('ticket_prov')->unique();
            $table->foreign('mark_id')->references('id')->on('marks');
            $table->unsignedBigInteger('category_id');
            $table->string('plate')->unique();
            $table->string('serial')->unique();
            $table->enum('status',['ACTIVE','DESACTIVATED'])->default('ACTIVE');
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->unsignedBigInteger('sede_id');
            $table->foreign('sede_id')->references('id')->on('sedes'); */
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
        Schema::dropIfExists('warranties');
    }
}
