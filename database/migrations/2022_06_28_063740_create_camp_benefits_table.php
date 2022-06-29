<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignIdColumnDefinition;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camp_benefits', function (Blueprint $table) {
            $table->id();
            // cara tambah forign key yang pertama
            // $table->bigInteger('camp_id')->unsigned();
            // $table->unsignedBigInteger('camp_id');
            
            // cara kedua
            $table->foreignId('camp_id')->constrained();
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();

            // cara pertama
            // $table->foreign('camp_id')->references('id')->on('camps')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camp_benefits');
    }
};
