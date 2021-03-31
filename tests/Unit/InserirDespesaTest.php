<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Despesa;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class InserirDespesaTest extends TestCase
{
    use DatabaseTransactions;

    /** @test*/
    public function inserir_nova_despesa()
    {
        $des = new Despesa([
            'valor' => 615.53,
            'tipo_despesa' => 'Cartão de Crédito',
            'pessoas_id' => 1
        ]);
        $des->save();

        $this->assertEquals(615.53, $des->valor);
        $this->assertEquals('Cartão de Crédito', $des->tipo_despesa);
        $this->assertEquals(1, $des->pessoas_id);
    }
}
