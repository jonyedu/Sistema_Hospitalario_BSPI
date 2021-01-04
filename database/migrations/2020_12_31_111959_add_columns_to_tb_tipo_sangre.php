<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToTbTipoSangre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('control_hospitalario_db_sql')->table('tbTipoSangre', function (Blueprint $table) {
            $table->unsignedInteger('status')->default('1')->after('descripcion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbTipoSangre', function (Blueprint $table) {
            //
        });
    }
}
