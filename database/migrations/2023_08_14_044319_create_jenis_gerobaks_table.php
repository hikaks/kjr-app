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
        Schema::create('jenis_gerobaks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_gerobak');
            $table->unsignedBigInteger('id_minuman');
            $table->timestamps();

            $table->foreign('id_minuman')->references('id')->on('jenis_minumans')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_gerobaks');
    }
};
