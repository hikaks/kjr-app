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
        Schema::table('pelanggans', function (Blueprint $table) {
            $table->unsignedBigInteger('id_minuman')->after('telepon');
            $table->unsignedBigInteger('id_gerobak')->after('id_minuman');

            $table->foreign('id_minuman')->references('id')->on('jenis_minumans')->onDelete('restrict');
            $table->foreign('id_gerobak')->references('id')->on('jenis_gerobaks')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pelanggans', function (Blueprint $table) {
            $table->dropForeign(['id_minuman']);
            $table->dropColumn('id_minuman');
            $table->dropForeign(['id_gerobak']);
            $table->dropColumn('id_gerobak');
        });
    }
};
