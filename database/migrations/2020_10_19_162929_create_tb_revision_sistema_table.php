<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbRevisionSistemaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::connection('control_hospitalario_db_sql')->hasTable('tb_revision_sistema')) {
            Schema::connection('control_hospitalario_db_sql')->create('tb_revision_sistema', function (Blueprint $table) {
                $table->bigIncrements('idRevisionSistema');
                $table->unsignedInteger('SecCirPro');
                $table->unsignedInteger('hipertension')->default(0);
                $table->unsignedInteger('enfCoronaria')->default(0);
                $table->unsignedInteger('arritmias')->default(0);
                $table->unsignedInteger('otrosCardiovascular')->default(0);
                $table->unsignedInteger('enfValvular')->default(0);
                $table->unsignedInteger('varices')->default(0);
                $table->unsignedInteger('claudicacion')->default(0);
                $table->unsignedInteger('epoc')->default(0);
                $table->unsignedInteger('asma')->default(0);
                $table->unsignedInteger('tbc')->default(0);
                $table->unsignedInteger('otrosRespiratorio')->default(0);
                $table->unsignedInteger('convulsiones')->default(0);
                $table->unsignedInteger('ecv')->default(0);
                $table->unsignedInteger('meningitis')->default(0);
                $table->unsignedInteger('enfMental')->default(0);
                $table->unsignedInteger('otrosNeurologico')->default(0);
                $table->unsignedInteger('ira')->default(0);
                $table->unsignedInteger('infeccionUnitaria')->default(0);
                $table->unsignedInteger('irc')->default(0);
                $table->unsignedInteger('otrosNefrologicos')->default(0);
                $table->unsignedInteger('ulcera')->default(0);
                $table->unsignedInteger('estomagoLleno')->default(0);
                $table->unsignedInteger('otrosGastrointestinal')->default(0);
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
        Schema::dropIfExists('tb_revision_sistema');
    }
}
