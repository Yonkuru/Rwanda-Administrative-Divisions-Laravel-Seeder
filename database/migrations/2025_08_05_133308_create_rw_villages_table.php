<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rw_villages', function (Blueprint $table) {
            $table->bigInteger('vlg_id')->unsigned()->primary();
            $table->bigInteger('vlg_cell')->unsigned();
            $table->string('vlg_name');
            $table->timestamps();

            //Relationship to the cell table
            $table->foreign('vlg_cell')->references('cel_id')->on('rw_cells')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rw_villages');
    }
};
