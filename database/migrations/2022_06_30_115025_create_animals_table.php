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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('especie');
            $table->string('raca');
            $table->string('nome')->nullable(true);
            $table->boolean('statusadocao')->default(false);
            $table->string('estadosaude');
            $table->string('necessidadeespecial')->nullable(true);
            $table->date('datanascimento')->nullable(true);
            $table->date('datarecebimento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
};
