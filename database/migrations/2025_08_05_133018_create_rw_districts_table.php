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
        Schema::create('rw_districts', function (Blueprint $table) {
            $table->bigInteger('dst_id')->unsigned()->primary();
            $table->bigInteger('dst_province')->unsigned();
            $table->string('dst_name');
            $table->timestamps();

            //Declare foreign key for the province
            $table->foreign('dst_province')->references('prv_id')->on('rw_provinces')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rw_districts');
    }
};
