<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('control_hospitalario_db_sql')->create('tb_datos_registro', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('registro_anestesia_id');
            $table->decimal('estatura', 10,2)->nullable();
            $table->decimal('peso', 10,2)->nullable();
            $table->string('diagnostico_pre',100)->nullable();
            $table->string('diagnostico_post',100)->nullable();
            $table->string('operacion_propuesta',100)->nullable();
            $table->string('operacion_realizada',100)->nullable();
            $table->string('cirujano_h',100)->nullable();
            $table->string('cirujano_e',100)->nullable();
            $table->string('ayudante1_h',100)->nullable();
            $table->string('ayudante1_e',100)->nullable();
            $table->string('ayudante2_h',100)->nullable();
            $table->string('ayudante2_e',100)->nullable();
            $table->string('anestesiologo_h',100)->nullable();
            $table->string('anestesiologo_e',100)->nullable();
            $table->string('instrumentista_e',100)->nullable();
            $table->string('instrumentista_h',100)->nullable();
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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_registros');
    }
}
