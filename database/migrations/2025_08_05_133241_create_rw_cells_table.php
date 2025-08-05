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
        Schema::create('rw_cells', function (Blueprint $table) {
            $table->bigInteger('cel_id')->unsigned()->primary();
            $table->bigInteger('cel_sector')->unsigned();
            $table->string('cel_name');
            $table->timestamps();

            //Relationship to the sectors table
            $table->foreign('cel_sector')->references('sct_id')->on('rw_sectors')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rw_cells');
    }
};
