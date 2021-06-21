<?php

namespace Tests\Unit;

use Tests\Feature\OpTest;
use Tests\TestCase;
use Illuminate\Validation\Validator;

class ValidacaoTest extends TestCase
{

    /** @test */
    public function valida_valor_receita()
    {
        $Optest = new Optest();
        $response = $this->post('/receitas/novo', $Optest->validaReceita(['valor' => '340']));
        $response->assertRedirect('/receitas');
    }

    /** @test */
    public function valida_tipo_receita()
    {
        $Optest = new Optest();
        $response = $this->post('/receitas/novo', $Optest->validaReceita(['tipo_receita' => 'Cartão de crédito']));
        $response->assertRedirect('/receitas');
    }

    /** @test */
    public function valida_saldo_usuario()
    {
        $Optest = new Optest();
        $response = $this->post('/register', $Optest->validaUsuario(['saldo' => '2450']));
        $response->assertRedirect('/');
    }


    /** @test */
    public function valida_valor_despesa()
    {
        $Optest = new Optest();
        $response = $this->post('/despesas/novo', $Optest->validaReceita(['valor' => '130']));
        $response->assertRedirect('/despesas');
    }

    /** @test */
    public function valida_email_usuario()
    {
        $Optest = new Optest();
        $response = $this->post('/register', $Optest->validaReceita(['email' => 'jose@gmail.com']));
        $response->assertRedirect('/');
    }
}
