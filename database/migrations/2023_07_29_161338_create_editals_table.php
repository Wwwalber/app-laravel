<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('editais', function (Blueprint $table) {
            //pode ser personalizado
            $table->id();
            $table->string('numero_edital');
            $table->string('ano_str');
            $table->year('ano');
            $table->enum('status',['i','a','e']); // i=inscrições abertas, a=em andamento, e= encerrados
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('editais');
    }
};