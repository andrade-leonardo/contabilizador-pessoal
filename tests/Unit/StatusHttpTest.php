<?php

namespace Tests\Unit;

use Tests\TestCase;

class StatusHttpTest extends TestCase
{

    /** @test*/
    public function resposta_login_test()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    /** @test*/
    public function resposta_receita_test()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    /** @test*/
    public function resposta_home_test()
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
    }
}
