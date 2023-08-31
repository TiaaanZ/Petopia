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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('Usuario');
            $table->foreign('rol_id')
                  ->references('id')
                  ->on('roles')
                  ->onDelete('cascade');
            $table->unsignedInteger('Identificacion');
            $table->string('Nombres',50);
            $table->string('Apellidos');
            $table->text('Direccion');
            $table->unsignedInteger('Telefono');
            $table->email('Correo');
            $table->password('Contraseña');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
