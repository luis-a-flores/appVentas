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
        Schema::create('listaVentas', function (Blueprint $table) {
            $table->id('id_venta');
            $table->date('fecha_venta')->nullable();
            $table->foreignId('cliente')->nullable();
            $table->string('estadoVenta');//
            $table->foreignId('idProducto')->nullable();
            $table->float('total',8,2);
            $table->float('pagado',8,2);
            $table->float('saldo',8,2);
            $table->string('estadoPago');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
