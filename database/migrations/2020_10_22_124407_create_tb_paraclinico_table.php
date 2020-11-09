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
                $table->unsignedInteger('hcto')->default(0);
                $table->unsignedInteger('leucocito')->default(0);
                $table->unsignedInteger('na')->default(0);
                $table->unsignedInteger('ci')->default(0);
                $table->unsignedInteger('k')->default(0);
                $table->unsignedInteger('ca')->default(0);
                $table->unsignedInteger('bun')->default(0);
                $table->unsignedInteger('creati')->default(0);
                $table->unsignedInteger('glicemia')->default(0);
                $table->unsignedInteger('plaqueta')->default(0);
                $table->unsignedInteger('tp')->default(0);
                $table->unsignedInteger('tpt')->default(0);
                $table->unsignedInteger('mg')->default(0);
                $table->string('ekg')->nullable();
                $table->string('ecocardiograma')->nullable();
                $table->string('rxTorax')->nullable();
                $table->unsignedInteger('asa1')->default(0);
                $table->unsignedInteger('asa2')->default(0);
                $table->unsignedInteger('asa3')->default(0);
                $table->unsignedInteger('asa4')->default(0);
                $table->unsignedInteger('asa5')->default(0);
                $table->unsignedInteger('u')->default(0);
                $table->unsignedInteger('categoria1')->default(0);
                $table->unsignedInteger('categoria2')->default(0);
                $table->unsignedInteger('categoria3')->default(0);
                $table->unsignedInteger('categoria4')->default(0);
                $table->unsignedInteger('categoria5')->default(0);
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
