<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbDatosPosicionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::connection('control_hospitalario_db_sql')->hasTable('tb_datos_posiciones')) {
            Schema::connection('control_hospitalario_db_sql')->create('tb_datos_posiciones', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedInteger('registro_anestesia_id');
                $table->unsignedInteger('hora')->nullable();
                $table->unsignedInteger('min')->nullable();
                $table->unsignedInteger('segundos')->nullable();
                $table->unsignedInteger('posicion_id');
                $table->unsignedInteger('indice_hora');
                $table->unsignedInteger('indice_min');
                /* Datos para auditoria */
                $table->string('des_campo1', 100)->nullable();
                $table->string('des_campo2', 50)->nullable();
                $table->decimal('des_campo3', 10,2)->nullable();
                $table->string('usu_created_update');
                $table->timestamps();
                $table->string('pcip')->nullable();
                $table->unsignedInteger('status')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_datos_posiciones');
    }
}
