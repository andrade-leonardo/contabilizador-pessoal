<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class InserirUserTest extends TestCase
{
    use DatabaseTransactions;

    /** @test*/
     function inserir_novo_usuario()
    {

        $us = new User([
            'name' => 'Carla Bárbara Liz Lima',
            'email' => 'carlabarbaralizlima__carlabarbaralizlima@edbrasil.net',
            'password' => '561ewqeqwij'
        ]);
        $us->save();

        $this->assertEquals('Carla Bárbara Liz Lima', $us->name);
        $this->assertEquals('carlabarbaralizlima__carlabarbaralizlima@edbrasil.net', $us->email);
        $this->assertEquals('561ewqeqwij', $us->password);
    }
}
