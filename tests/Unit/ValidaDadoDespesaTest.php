<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Despesa;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ValidaDadoDespesaTest extends TestCase
{
    use DatabaseTransactions;

    /** @test*/
    public function validar_despesa_salva_no_banco()
    {
        $des = Despesa::find(1);

        $this->assertDatabaseHas('despesas', [
            'id' => $des->id,
            'tipo_despesa' => $des->tipo_despesa,
            'valor' => $des->valor
    ]);
    }
}
