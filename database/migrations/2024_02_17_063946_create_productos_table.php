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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('clave')->unique();
            $table->string('nombre');
            $table->foreignId('marca')->nullable()->index();
            $table->foreignId('categoria')->nullable()->index();
            $table->float('precio_compra', 10,2);
            $table->float('precio_venta', 8,2);
            $table->integer('cantidad');
            $table->foreignId('unidad')->nullable()->index();
            $table->integer('stock_minimo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
