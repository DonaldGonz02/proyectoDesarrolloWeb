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
        Schema::table('tbl_detalle_apertura_caja', function (Blueprint $table) {
            $table->foreign(['id_apertura_caja'], 'tbl_detalle_apertura_caja_ibfk_1')->references(['id_apertura_caja'])->on('tbl_apertura_caja')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_metodo_pago'], 'tbl_detalle_apertura_caja_ibfk_2')->references(['id_metodo_pago'])->on('tbl_metodo_pago')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_detalle_apertura_caja', function (Blueprint $table) {
            $table->dropForeign('tbl_detalle_apertura_caja_ibfk_1');
            $table->dropForeign('tbl_detalle_apertura_caja_ibfk_2');
        });
    }
};