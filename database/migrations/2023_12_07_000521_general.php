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
      

        // Crear la tabla `Usuario`
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 255);
            $table->string('contrasena', 255)->nullable;
            $table->timestamps();
        });

        // Crear la tabla `Paciente`
        Schema::create('paciente', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 255);
            $table->string('sexo', 255);
            $table->date('fechaNacimiento');
            $table->integer('edad');
            $table->integer('idNum');
            $table->string('aseguradora', 255);
            $table->string('email', 255);
            $table->string('domicilio', 255);
            $table->string('telefono', 255);
            $table->string('otros', 255);           
            $table->unsignedBigInteger('usuario_id');
            $table->timestamps();
            $table->foreign('usuario_id')->references('id')->on('usuarios');
        });

        // Crear la tabla `Historia`
        Schema::create('historia', function (Blueprint $table) {
            $table->id();
            $table->date('fechaElaboracion');
            $table->time('hora');
            $table->string('descripcion', 255);
            $table->string('diagnostico', 255);
            $table->string('tratamiento', 255);
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('paciente_id');
            $table->timestamps();
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('paciente_id')->references('id')->on('paciente');
        });

        // Crear la tabla `Citas`
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->time('hora');
            $table->string('motivoConsulta', 255);
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('paciente_id');
            $table->timestamps();
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('paciente_id')->references('id')->on('paciente');
        });

        // Crear la tabla `rolUsuario`
        Schema::create('rol_usuario', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id');
            $table->string('nombreRol', 255);
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->timestamps();
        });

        // Crear la tabla `Recetario`
        Schema::create('recetario', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('historia_id');
            $table->timestamps();
            $table->foreign('historia_id')->references('id')->on('historia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {      
        // Revertir las migraciones en orden inverso
        Schema::dropIfExists('recetario');
        Schema::dropIfExists('rol_usuario');
        Schema::dropIfExists('citas');
        Schema::dropIfExists('historia');
        Schema::dropIfExists('usuarios');
        Schema::dropIfExists('paciente');
        
    }
};
