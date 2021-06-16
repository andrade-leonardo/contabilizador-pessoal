<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class InserirUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert(
            array(
                'name' => 'Matt Damon',
                'email' => 'dale@gmail.com',
                'password' => '$2y$10$zoAQiCL6LGPLmkNGkcdzOO4LGf4d45nviSZtjyEJQI3pTDw2YMLGq',
                'saldo' => '3050'
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
        //
    }
}
