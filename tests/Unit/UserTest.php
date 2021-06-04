<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function checar_colunas_tabela_user()
    {
        $user = new User();

        $expected = [
            'name',
            'saldo',
            'email',
            'password'
        ];

        $comparadorArrays = array_diff($expected, $user->getFillable());

        $this->assertEquals(0, count($comparadorArrays));
    }

     /** @test*/
     function inserir_novo_usuario()
    {

        $us = new User([
            'name' => 'Carla Bárbara Liz Lima',
            'saldo' => '2312',
            'email' => 'carlabarbaralizlima__carlabarbaralizlima@edbrasil.net',
            'password' => '561ewqeqwij'
        ]);
        $us->save();

        $this->assertEquals('Carla Bárbara Liz Lima', $us->name);
        $this->assertEquals('2312', $us->saldo);
        $this->assertEquals('carlabarbaralizlima__carlabarbaralizlima@edbrasil.net', $us->email);
        $this->assertEquals('561ewqeqwij', $us->password);
    }

     /** @test*/
     public function validar_usuario_salvo_no_banco()
     {
         $us = User::find(1);

         $this->assertDatabaseHas('users', [
             'id' => $us->id,
             'name' => $us->name,
             'saldo' => $us->saldo,
             'email' => $us->email,
             'password' => $us->password
     ]);
     }
}
