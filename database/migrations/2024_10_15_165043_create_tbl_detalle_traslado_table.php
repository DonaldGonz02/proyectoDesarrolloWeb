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
        Schema::create('tbl_detalle_traslado', function (Blueprint $table) {
            $table->integer('id_detalle_traslado', true);
            $table->integer('id_traslado')->nullable()->index('id_traslado');
            $table->integer('id_producto')->nullable()->index('id_producto');
            $table->integer('cantidad_trasladar')->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable()->useCurrent();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_detalle_traslado');
    }
};