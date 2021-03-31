<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class Despesas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('despesas', function (Blueprint $table) {
            $table->id();
            $table->decimal('valor');
            $table->string('tipo_despesa');
            $table->unsignedBigInteger('pessoas_id');
            $table->foreign('pessoas_id')->references('id')->on('pessoas');
            $table->timestamps();
        });

        
        DB::table('despesas')->insert(
            array(
                'valor' => '60.40',
                'tipo_despesa' => 'Conta de Água',
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
        Schema::dropIfExists('despesas');
    }
}
