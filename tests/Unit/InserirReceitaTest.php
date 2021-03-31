<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Receita;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class InserirReceitaTest extends TestCase
{
    use DatabaseTransactions;

    /** @test*/
     function inserir_nova_receita()
    {

        $rec = new Receita([
            'valor' => 1513,
            'tipo_receita' => 'Salário',
            'pessoas_id' => 1
        ]);
        $rec->save();

        $this->assertEquals(1513, $rec->valor);
        $this->assertEquals('Salário', $rec->tipo_receita);
        $this->assertEquals(1, $rec->pessoas_id);
    }
}
