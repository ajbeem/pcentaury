<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('razonSocial', 150);
            $table->string('RFC', 50);
            $table->string('CURP', 50)->nullable();
            $table->string('ranking', 50)->nullable();
            $table->string('telefonoLocal', 50);
            $table->string('telefonoMovil', 50)->nullable();
            $table->string('eMail', 150);
            $table->string('webPage', 150)->nullable();
            $table->integer('codigoPostal');
            $table->string('estado', 100);
            $table->string('alcaldiaMpo', 100);
            $table->string('colonia', 100);
            $table->string('calle', 100);
            $table->smallInteger('numeroExterior');
            $table->smallInteger('numeroInterior')->nullable();
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
        Schema::dropIfExists('proveedores');
    }
}
