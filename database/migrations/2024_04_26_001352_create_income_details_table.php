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
        Schema::create('income_details', function (Blueprint $table) {
            $table->id();
            
            // Relación con la tabla "incomes"
            $table->unsignedBigInteger('income_id');
            $table->foreign('income_id')->references('id')->on('incomes')->onDelete('cascade');
            
            // Relación con la tabla "articles"
            $table->unsignedBigInteger('article_id');
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
            
            // Detalles adicionales
            $table->integer('quantity'); // Cantidad de artículos
            $table->decimal('price', 11, 2); // Precio unitario
            $table->timestamps(); // Marca de tiempo para creación y actualización
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('income_details'); // Elimina la tabla
    }
};



           