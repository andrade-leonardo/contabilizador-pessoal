<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Receita;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ReceitaTest extends TestCase
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

    /** @test*/
    public function editar_receita()
    {
        $rec = Receita::find(1);
        $rec->valor = 278;
        $rec->tipo_receita = 'Décimo Terceiro';
        $rec->pessoas_id = 1;
        $rec->save();

        $this->assertEquals(278, $rec->valor);
        $this->assertEquals('Décimo Terceiro', $rec->tipo_receita);
        $this->assertEquals(1, $rec->pessoas_id);
    }

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
