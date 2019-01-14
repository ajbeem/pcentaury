<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombres', 100);
            $table->string('apellidoPaterno', 100);
            $table->string('apellidoMaterno', 100);
            $table->string('nickName', 50)->nullable();
            $table->string('pasword', 16)->nullable();
            $table->string('eMail', 100);
            $table->string('estatus', 10);
            $table->string('categoria', 10);
            $table->string('ranking', 10);
            $table->string('cveActivacion', 100)->nullable();
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
        Schema::dropIfExists('usuarios');
    }
}
