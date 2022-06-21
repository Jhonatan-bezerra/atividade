<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastro', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("observacao", 50);
            $table->varchar("endereco");
            $table->varchar("provincia");
            $table->text("descricao");
            
        });
    }

 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
   
}
