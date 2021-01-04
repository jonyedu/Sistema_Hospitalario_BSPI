<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbExamenFisicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::connection('control_hospitalario_db_sql')->hasTable('tb_examen_fisico')) {
            Schema::connection('control_hospitalario_db_sql')->create('tb_examen_fisico', function (Blueprint $table) {
                $table->bigIncrements('idExamenFisico');
                $table->unsignedInteger('SecCirPro');
                $table->unsignedInteger('pa')->nullable();
                $table->unsignedInteger('fc')->nullable();
                $table->unsignedInteger('peso')->nullable();
                $table->unsignedInteger('talla')->nullable();
                $table->string('estado_general')->nullable();
                $table->unsignedInteger('cuelloCorto')->default(0);
                //$table->unsignedInteger('dmt')->nullable();
                $table->string('dmt')->nullable();
                $table->unsignedInteger('cmCuelloCorto')->nullable();
                $table->string('movilidad_cuello')->nullable();
                $table->string('escala_malla')->nullable();
                $table->unsignedInteger('cmBocaAperturaOral')->nullable();
                $table->string('dentadura')->nullable();
                $table->unsignedInteger('edentulo')->default(0);
                $table->unsignedInteger('protesis')->default(0);
                $table->string('cardiovascular')->nullable();
                $table->string('respiratorio')->nullable();
                $table->string('abdomen')->nullable();
                $table->string('extremidades')->nullable();
                $table->string('otros')->nullable();
                $table->unsignedInteger('puntuacionNeurologico')->nullable();
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
        Schema::dropIfExists('tb_examen_fisico');
    }
}
