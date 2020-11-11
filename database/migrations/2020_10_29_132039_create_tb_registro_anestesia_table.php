<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbRegistroAnestesiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::connection('control_hospitalario_db_sql')->hasTable('tb_registro_anestesia')) {
            Schema::connection('control_hospitalario_db_sql')->create('tb_registro_anestesia', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedInteger('SecCirPro');
                /* Tiempos */
                $table->time('duracion_anestesia')->default('00:00:00');
                $table->time('duracion_operacion',)->default('00:00:00');
                /* Tecnicas */
                //seccion 0
                $table->boolean('general')->default(0);
                $table->boolean('sistem_abierto')->default(0);
                $table->boolean('sistem_cerrado')->default(0);
                $table->boolean('sistem_semi_cerr')->default(0);
                $table->boolean('cinc_aparatos_usados')->default(0);
                $table->boolean('vaiiven_aparatos_usados')->default(0);
                $table->boolean('mascara')->default(0);
                //seccion 1
                $table->boolean('oral_inte_traqueal')->default(0);
                $table->boolean('nasal_inte_traqueal')->default(0);
                $table->boolean('rapido_inte_traqueal')->default(0);
                $table->boolean('lenta_inte_traqueal')->default(0);
                $table->unsignedInteger('turbo_inte_traqueal')->nullable();
                $table->boolean('manguito_inflam_inte_traqueal')->default(0);
                $table->boolean('taponamiento_inte_traqueal')->default(0);
                $table->boolean('asist_topica_inte_traqueal')->default(0);
                $table->boolean('asist_tranboral_inte_traqueal')->default(0);
                //seccion 2
                $table->boolean('conductiva')->default(0);
                $table->boolean('asepsia_piel')->default(0);
                $table->string('con')->nullable();
                $table->boolean('habon')->default(0);
                $table->boolean('raquidea')->default(0);
                $table->boolean('epidural_caud')->default(0);
                //seccion 3
                $table->boolean('simple_altura_puncion')->default(0);
                $table->boolean('continua_altura_puncion')->default(0);
                //seccion 4
                $table->boolean('puncion_lat')->default(0);
                $table->boolean('linea_media')->default(0);
                //seccion 5
                $table->unsignedInteger('aguja')->nullable();
                $table->unsignedInteger('nivel')->nullable();
                $table->boolean('hiperbara')->default(0);
                $table->string('id_tipo_posiciones')->nullable();
                /* Complicaciones Operatorias */
                $table->boolean('hipotension')->default(0);
                $table->boolean('arritmias')->default(0);
                $table->boolean('depresion_respiratoria')->default(0);
                $table->boolean('perforacion_duramadre')->default(0);
                $table->boolean('dificultad_intubacion')->default(0);
                $table->boolean('nauses_vomitos')->default(0);
                $table->boolean('conductiva_insuficiente')->default(0);
                $table->boolean('laringo_espasmo')->default(0);
                $table->boolean('paro_cardiaco')->default(0);
                $table->boolean('ninguna')->default(0);
                $table->boolean('cambio_tecnica')->default(0);
                $table->string('otros_complicaciones')->nullable();
                $table->string('comentario')->nullable();
                /* Hemorragia */
                $table->unsignedInteger('hemorragia')->nullable();
                /* Apagar */
                $table->unsignedInteger('min1')->nullable();
                $table->unsignedInteger('min5')->nullable();
                $table->unsignedInteger('min10')->nullable();
                $table->unsignedInteger('p_muerto')->nullable();
                /* Tecnicas Especiales */
                $table->string('tecnicas_especiales', 100)->nullable();
                $table->string('conducido_a', 100)->nullable();
                $table->string('por', 100)->nullable();
                $table->time('hora')->default('00:00:00')->nullable();
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
        Schema::dropIfExists('tb_registro_anestesia');
    }
}
