<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class Receitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receitas', function (Blueprint $table) {
            $table->id();
            $table->decimal('valor');
            $table->string('tipo_receita');
            $table->unsignedBigInteger('pessoas_id');
            $table->foreign('pessoas_id')->references('id')->on('pessoas');
            $table->timestamps();
        });

        DB::table('receitas')->insert(
            array(
                'valor' => '3899',
                'tipo_receita' => 'Salário',
                'pessoas_id' => '1'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receitas');
    }
}
