<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('concepto', 100);
            $table->string('tipo', 100);
            $table->string('descripcion', 500)->nullable();
            $table->string('presentacion', 100);
            $table->float('costoCompra', 8, 4);
            $table->float('costoUnitario', 8, 4);
            $table->bigInteger('idProveedor');
            $table->smallInteger('stock');
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
        Schema::dropIfExists('articulos');
    }
}
