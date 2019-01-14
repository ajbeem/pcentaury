<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosPedidosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios_pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idPedido');
            $table->bigInteger('idServicio');
            $table->smallInteger('cantidad');
            $table->string('concepto', 100);
            $table->string('tipo', 100);
            $table->string('descripcion', 500)->nullable();
            $table->float('costoUnitario', 8, 4);
            $table->float('subtotal', 8, 4);
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
        Schema::dropIfExists('servicios_pedidos');
    }
}
