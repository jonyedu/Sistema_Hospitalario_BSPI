<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbDatosRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::connection('control_hospitalario_db_sql')->hasTable('tb_datos_registro')) {
            Schema::connection('control_hospitalario_db_sql')->create('tb_datos_registro', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedInteger('registro_anestesia_id');
                $table->string('paciente', 255)->nullable();
                $table->unsignedInteger('historia_clinica')->nullable();
                $table->datetime('fecha')->nullable();
                $table->unsignedInteger('edad')->nullable();
                $table->string('sexo', 50)->nullable();
                $table->decimal('estatura', 10, 2)->nullable();
                $table->decimal('peso', 10, 2)->nullable();
                $table->string('ocupacion_actual', 255)->nullable();
                $table->string('servicio', 255)->nullable();
                $table->string('sala', 255)->nullable();
                $table->string('cama', 255)->nullable();
                $table->unsignedInteger('id_diagnostico_pre')->nullable();
                $table->unsignedInteger('id_diagnostico_post')->nullable();
                $table->string('operacion_propuesta', 100)->nullable();
                $table->unsignedInteger('id_cirujano')->nullable();
                $table->unsignedInteger('id_ayudante1')->nullable();
                $table->unsignedInteger('id_operacion_realizada')->nullable();
                $table->unsignedInteger('id_anestesiologo')->nullable();
                $table->unsignedInteger('id_ayudante2')->nullable();
                $table->unsignedInteger('id_instrumentista')->nullable();
                /* $table->string('cirujano_e', 100)->nullable();
                $table->string('ayudante1_e', 100)->nullable();
                $table->string('ayudante2_h', 100)->nullable();
                $table->string('anestesiologo_e', 100)->nullable();
                $table->string('instrumentista_e', 100)->nullable(); */

                /* Datos para auditoria */
                $table->string('des_campo1', 100)->nullable();
                $table->string('des_campo2', 50)->nullable();
                $table->decimal('des_campo3', 10, 2)->nullable();
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
        Schema::dropIfExists('datos_registros');
    }
}
