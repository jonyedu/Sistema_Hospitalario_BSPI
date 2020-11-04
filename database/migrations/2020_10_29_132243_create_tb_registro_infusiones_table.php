<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbRegistroInfusionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::connection('control_hospitalario_db_sql')->hasTable('tb_registro_infusiones')) {
            Schema::connection('control_hospitalario_db_sql')->create('tb_registro_infusiones', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedInteger('infusiones_id');
                $table->unsignedInteger('registro_anestesia_id');
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
        Schema::dropIfExists('tb_registro_infusiones');
    }
}
