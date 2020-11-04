<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbTipoAgenteAnestesia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::connection('control_hospitalario_db_sql')->hasTable('tb_tipo_agente_anestesia')) {
            Schema::connection('control_hospitalario_db_sql')->create('tb_tipo_agente_anestesia', function (Blueprint $table) {
                $table->bigIncrements('id');
                // $table->unsignedInteger('registro_anestesia_id');
                $table->string('descripcion');
                $table->string('name_system');;
                /* Datos para auditoria */
                $table->string('des_campo1', 100)->nullable();
                $table->string('des_campo2', 50)->nullable();
                $table->decimal('des_campo3', 10,2)->nullable();
                $table->unsignedInteger('created_by')->nullable();
                $table->unsignedInteger('updated_by')->nullable();
                $table->timestamps();
                $table->string('pcip')->nullable();
                $table->unsignedInteger('status')->default(1);
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
        Schema::dropIfExists('tb_tipo_agente_anestesia');
    }
}
