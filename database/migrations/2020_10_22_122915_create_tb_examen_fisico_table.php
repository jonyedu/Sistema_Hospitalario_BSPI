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
                $table->string('pa')->nullable();
                $table->string('fc')->nullable();
                $table->string('peso')->nullable();
                $table->string('talla')->nullable();
                $table->string('bEstadoGeneral')->nullable();
                $table->string('rEstadoGeneral')->nullable();
                $table->string('mEstadoGeneral')->nullable();
                $table->unsignedInteger('cuelloCorto')->default(0);
                $table->string('dmt')->nullable();
                $table->string('cmCuelloCorto')->nullable();
                $table->string('bMovilidadCuello')->nullable();
                $table->string('rMovilidadCuello')->nullable();
                $table->string('mMovilidadCuello')->nullable();
                $table->unsignedInteger('clase1')->default(0);
                $table->unsignedInteger('clase2')->default(0);
                $table->unsignedInteger('clase3')->default(0);
                $table->unsignedInteger('clase4')->default(0);
                $table->unsignedInteger('ingurgitacionYugular')->default(0);
                $table->string('cmBocaAperturaOral')->nullable();
                $table->string('bDentadura')->nullable();
                $table->string('rDentadura')->nullable();
                $table->string('mDentadura')->nullable();
                $table->unsignedInteger('edentulo')->default(0);
                $table->unsignedInteger('protesis')->default(0);
                $table->string('cardiovascular')->nullable();
                $table->string('respiratorio')->nullable();
                $table->string('abdomen')->nullable();
                $table->string('extremidades')->nullable();
                $table->string('puntuacionNeurologico')->nullable();
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
