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
        Schema::create('presentacion_producto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_producto')->nullable();
            $table->foreignId('id_unidad')->nullable()->index();
            $table->float('precio_compra', 10,2);
            $table->float('precio_venta', 8,2);
            $table->float('cantidad_almacen',8,2);
            $table->float('cantidad_min',8,2);
            $table->float('cantidad_max',8,2);
            $table->float('venta_min',8,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presentacion_producto');
    }
};
