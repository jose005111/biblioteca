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
        Schema::create('leitores', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('bi', '14')->unique();
            $table->enum('genero', ['M', 'F']);
            $table->string('endereco');
            $table->string('contacto', '9')->unique();
            $table->string('cartao', '14')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
