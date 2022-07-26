<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReclusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recluses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_document_id');
            $table->foreign('type_document_id')->references('id')->on('type_document');
            $table->string('document',30)->comment('documneto');
            $table->string('code_recluse',20)->comment('codigo del recluso');
            $table->string('Sex',10)->comment('Sexo');
            $table->string('name_recluse',100)->comment('Nombre del recluso');
            $table->string('surname_recluse',100)->comment('Apellidos');
            $table->unsignedBigInteger('jailcells_id');
            $table->foreign('jailcells_id')->references('id')->on('jailcells');;
            $table->string('state',10)->comment('Estado del recluso');
            $table->unsignedBigInteger('pavilions_id');
            $table->foreign('pavilions_id')->references('id')->on('pavilion');
            $table->unsignedBigInteger('user_create_id')->comment('Usuario que crea');
            $table->unsignedBigInteger('user_edit_id')->comment('Usuario que edita')->nullable();
            $table->foreign('user_create_id')->references('id')->on('users');
            $table->foreign('user_edit_id')->references('id')->on('users');
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
        Schema::dropIfExists('recluses');
    }
}
