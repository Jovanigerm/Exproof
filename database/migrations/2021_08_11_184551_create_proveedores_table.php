<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->bigIncrements('id_proveedor');
            $table->string('razon_social');
            $table->string('rfc_prov');
            $table->integer('telefono_prov');
            $table->string('correo_prov');
            $table->integer('id_estado');
            $table->integer('id_municipio');
            $table->string('colonia_prov');
            $table->string('calle_prov');
            $table->integer('numero_prov');
            $table->integer('cp_prov');
            $table->string('nombrecontact_prov');
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
        Schema::dropIfExists('proveedores');
    }
}
