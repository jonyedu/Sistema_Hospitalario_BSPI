<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbListadoVerificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('control_hospitalario_db_sql')->create('tb_listado_verificaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('SecCirPro')->default(0);
            $table->unsignedInteger('chkentrada01')->default(0);
            $table->unsignedInteger('chkentrada02')->default(0);
            $table->unsignedInteger('chkentrada03')->default(0);
            $table->unsignedInteger('chkentrada04')->default(0);
            $table->unsignedInteger('chkentrada05')->default(0);
            $table->unsignedInteger('chkentrada06')->default(0);
            $table->unsignedInteger('chkentrada07')->default(0);
            $table->unsignedInteger('chkquirurgica01')->default(0);
            $table->unsignedInteger('chkquirurgica02')->default(0);
            $table->unsignedInteger('chkquirurgica03')->default(0);
            $table->unsignedInteger('chkquirurgica04')->default(0);
            $table->unsignedInteger('chkquirurgica05')->default(0);
            $table->unsignedInteger('chkquirurgica06')->default(0);
            $table->unsignedInteger('chkquirurgica07')->default(0);
            $table->unsignedInteger('chksalida01')->default(0);
            $table->unsignedInteger('chksalida02')->default(0);
            $table->unsignedInteger('chksalida03')->default(0);
            $table->unsignedInteger('chksalida04')->default(0);
            $table->unsignedInteger('chksalida05')->default(0);
            $table->unsignedInteger('user_id')->default(0);
            $table->string('cargo')->default(0);
            $table->string('observacion')->default(0);
            $table->string('firma')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_listado_verificacions');
    }
}
