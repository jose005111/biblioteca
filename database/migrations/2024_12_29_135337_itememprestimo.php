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
        schema::create('item_emprestimos', function(Blueprint $table){
            $table->id();
            $table->date('data_devolucao');
            $table->integer('periodo');
            $table->foreignId('livros_id')
            ->constrained()
            ->cascadeOnDelete()
            ->cascadeOnUpdate();            
            $table->foreignId('emprestimos_id')
            ->constrained()
            ->cascadeOnDelete()
            ->cascadeOnUpdate();

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
