<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Despesa;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EditarDespesaTest extends TestCase
{
    use DatabaseTransactions;

    /** @test*/
    public function editar_despesa()
    {
        $des = Despesa::find(1);
        $des->valor = 312.00;
        $des->tipo_despesa = 'Cartão de Crédito';
        $des->pessoas_id =  1;
        $des->save();

        $this->assertEquals(312.00, $des->valor);
        $this->assertEquals('Cartão de Crédito', $des->tipo_despesa);
        $this->assertEquals(1, $des->pessoas_id);   
    }
}
