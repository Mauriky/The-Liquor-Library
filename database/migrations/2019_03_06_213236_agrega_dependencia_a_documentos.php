<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregaDependenciaADocumentos extends Migration
{
    //php artisan make:migration --table==documentos agrega_dependencia_a_documentos
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('documentos', function (Blueprint $table) {
            $table->string('dependencia')->after('fecha_oficio');//after para especificar el lugar, de lo contrario se pondrá al final
            $table->renameColumn('dirigido','para');
            $table->string('envia',20)->nullable()->default(null)->change();
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('documentos', function (Blueprint $table) {
            $table->dropColumn('dependencia');
            $table->renameColumn('para','dirigido');
            $table->string('envia',20)->change();
        });
    }
}
