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
        Schema::create('adocaos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('datasolicitacao')->useCurrent();
            $table->date('dataapuracao')->nullable(true);
            $table->string('status')->default("Em espera");
            $table->unsignedBigInteger('tutor_id');
            $table->foreign('tutor_id')->references('id')->on('users');
            $table->unsignedBigInteger('animal_id');
            $table->foreign('animal_id')->references('id')->on('animals');
            $table->unsignedBigInteger('funcionario_id')->nullable(true);
            $table->foreign('funcionario_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adocaos');
    }
};
