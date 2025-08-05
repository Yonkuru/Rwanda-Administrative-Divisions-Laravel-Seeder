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
        Schema::create('rw_sectors', function (Blueprint $table) {
            $table->bigInteger('sct_id')->unsigned()->primary();
            $table->bigInteger('sct_district')->unsigned();
            $table->string('sct_name');
            $table->timestamps();

            //Foreing key for the district
            $table->foreign('sct_district')->references('dst_id')->on('rw_districts')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rw_sectors');
    }
};
