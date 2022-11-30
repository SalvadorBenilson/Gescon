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
        Schema::create('visita', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->boolean('autorizado')->nullable()->default(false);
            $table->date('data_entrada')->nullable()->default(new DateTime());
            $table->date('data_saida')->nullable()->default(new DateTime());
            $table->unsignedBigInteger('residencia_id');
            $table->unsignedBigInteger('usuario_id');
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
        Schema::dropIfExists('visita');
    }
};
