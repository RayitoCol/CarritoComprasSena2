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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['Cliente', 'Proveedor', 'Empleado', 'Otro'])->notNullable();
            $table->string('first_name',100)->notNullable();
            $table->string('last_name',100)->notNullable();
            $table->enum('document_type', ['CC', 'TI', 'CE', 'PP'])->nullable();
            $table->string('document_number',20)->Nullable();
            $table->string('address',100)->Nullable();
            $table->string('phone',20)->Nullable();
            $table->string('email',50)->Nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('person');
    }
};
