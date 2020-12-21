<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbParaclinicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::connection('control_hospitalario_db_sql')->hasTable('tb_paraclinico')) {
            Schema::connection('control_hospitalario_db_sql')->create('tb_paraclinico', function (Blueprint $table) {
                $table->bigIncrements('idParaclinico');
                $table->unsignedInteger('SecCirPro');
                $table->unsignedInteger('id_tipo_sangre');
                $table->unsignedInteger('hb')->default(0);
                $table->string('hb_valor')->nullable();
                $table->unsignedInteger('hcto')->default(0);
                $table->string('hcto_valor')->nullable();
                $table->unsignedInteger('leucocito')->default(0);
                $table->string('leucocito_valor')->nullable();
                $table->unsignedInteger('na')->default(0);
                $table->string('na_valor')->nullable();
                $table->unsignedInteger('ci')->default(0);
                $table->string('ci_valor')->nullable();
                $table->unsignedInteger('k')->default(0);
                $table->string('k_valor')->nullable();
                $table->unsignedInteger('ca')->default(0);
                $table->string('ca_valor')->nullable();
                $table->unsignedInteger('bun')->default(0);
                $table->string('bun_valor')->nullable();
                $table->unsignedInteger('creati')->default(0);
                $table->string('creati_valor')->nullable();
                $table->unsignedInteger('glicemia')->default(0);
                $table->string('glicemia_valor')->nullable();
                $table->unsignedInteger('plaqueta')->default(0);
                $table->string('plaqueta_valor')->nullable();
                $table->unsignedInteger('tp')->default(0);
                $table->string('tp_valor')->nullable();
                $table->unsignedInteger('tpt')->default(0);
                $table->string('tpt_valor')->nullable();
                $table->unsignedInteger('mg')->default(0);
                $table->string('mg_valor')->nullable();
                $table->string('ekg')->nullable();
                $table->string('ecocardiograma')->nullable();
                $table->string('rxTorax')->nullable();
                $table->string('otros')->nullable();
                $table->string('clasificacion_asa')->nullable();
                $table->string('clasificacion_riesgo')->nullable();
                $table->string('observacion')->nullable();
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
        Schema::dropIfExists('tb_paraclinico');
    }
}
