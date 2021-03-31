<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ValidaDadoUserTest extends TestCase
{
    use DatabaseTransactions;

    /** @test*/
    public function validar_usuario_salvo_no_banco()
    {
        $us = User::find(1);

        $this->assertDatabaseHas('users', [
            'id' => $us->id,
            'name' => $us->name,
            'email' => $us->email,
            'password' => $us->password
    ]);
    }
}
