<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosAdicionalesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_adicionales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->string('RFC', 25);
            $table->string('CURP', 25)->nullable();
            $table->integer('codigoPostal');
            $table->string('estado', 100);
            $table->string('alcaldiaMpo', 100);
            $table->string('colonia', 100);
            $table->string('calle', 100);
            $table->smallInteger('numeroExterior');
            $table->smallInteger('numeroInterior')->nullable();
            $table->string('telefonoLocal', 50);
            $table->string('telefonoMovil', 50);
            $table->bigIncrements('creado_por')->nullable();
            $table->bigIncrements('modificado_por')->nullable();
            $table->timestamp('fecha_creacion')->nullable();
            $table->timestamp('fecha_modificacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_adicionales');
    }
}
