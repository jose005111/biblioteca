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
        schema::create('contacto_usuarios', function(Blueprint $table){
            $table->id();
            $table->string('terminal');
            $table->foreignId('usuario_id')
            ->constrained()
            ->cascadeOnDelete()
            ->cascadeOnUpdate();            
            $table->foreignId('tipo_contactos_id')
            ->constrained()
            ->cascadeOnDelete()
            ->cascadeOnUpdate();
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
