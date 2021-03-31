<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Receita;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ValidaDadoReceitaTest extends TestCase
{
    use DatabaseTransactions;

    /** @test*/
    public function validar_receita_salva_no_banco()
    {
        $rec = Receita::find(1);

        $this->assertDatabaseHas('receitas', [
            'id' => $rec->id,
            'tipo_receita' => $rec->tipo_receita,
            'valor' => $rec->valor
    ]);
    }
}
