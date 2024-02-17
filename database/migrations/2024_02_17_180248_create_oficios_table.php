<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oficios', function (Blueprint $table) {
            $table->id();
            $table->string('folio');
            $table->string('lugar');
            $table->date('fecha');
            $table->string('cuerpo');
            $table->string('asunto');
            $table->string('foto_firma');
            $table->string('oficio_pdf');
           
            $table->timestamps();
            $table->softDeletes();

           });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oficios');
    }
};
