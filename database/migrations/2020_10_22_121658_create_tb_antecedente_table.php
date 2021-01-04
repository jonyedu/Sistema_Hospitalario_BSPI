<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAntecedenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        if (!Schema::connection('control_hospitalario_db_sql')->hasTable('tb_antecedente')) {
            Schema::connection('control_hospitalario_db_sql')->create('tb_antecedente', function (Blueprint $table) {
                $table->bigIncrements('idAntecedente');
                $table->unsignedInteger('SecCirPro');
                $table->unsignedInteger('quirurgico')->default(0);
                $table->string('descripcionQuirurgico')->nullable();
                $table->unsignedInteger('traumatico')->default(0);
                $table->string('descripcionTraumatico')->nullable();
                $table->unsignedInteger('alergia')->default(0);
                $table->string('alergiaValor')->nullable();
                $table->unsignedInteger('tabaco')->default(0);
                $table->unsignedInteger('cocaina')->default(0);
                $table->unsignedInteger('marihuana')->default(0);
                $table->unsignedInteger('otrosToxico')->default(0);
                $table->string('cual_otrosToxico')->nullable();
                $table->unsignedInteger('g')->nullable();
                $table->unsignedInteger('p')->nullable();
                $table->unsignedInteger('a')->nullable();
                $table->unsignedInteger('c')->nullable();
                $table->date('fur')->nullable();
                $table->unsignedInteger('familiar')->default(0);
                $table->string('cual_familiar')->nullable();
                $table->unsignedInteger('esteroide')->default(0);
                $table->unsignedInteger('aines')->default(0);
                $table->unsignedInteger('ieca')->default(0);
                $table->unsignedInteger('inetropico')->default(0);
                $table->unsignedInteger('anti_h2')->default(0);
                $table->unsignedInteger('asa')->default(0);
                $table->unsignedInteger('antibiotico')->default(0);
                $table->unsignedInteger('betabloqueador')->default(0);
                $table->unsignedInteger('diuretico')->default(0);
                $table->unsignedInteger('anticoagulante')->default(0);
                $table->unsignedInteger('calcioantagonista')->default(0);
                $table->unsignedInteger('acos')->default(0);
                $table->unsignedInteger('anticolinesterasico')->default(0);
                $table->unsignedInteger('otrasDroga')->default(0);
                $table->string('cual_otrasDroga')->nullable();
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
        Schema::dropIfExists('tb_antecedente');
    }
}
