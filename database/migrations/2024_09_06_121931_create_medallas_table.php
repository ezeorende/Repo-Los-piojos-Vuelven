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
        Schema::create('medallas', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo', ['oro', 'plata', 'bronce']);
            $table->foreignId('deportista_id')->references('id')->on('deportistas'); // Foreign key
            $table->foreignId('evento_id')->references('id')->on('evento_deportivos'); // Foreign key           
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
        Schema::dropIfExists('medallas');
    }
};
