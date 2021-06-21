<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Receita;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ReceitaTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function checar_colunas_tabela_receita()
    {
        $receita = new Receita();

        $expected = [
            'valor',
            'tipo_receita',
            'users_id'
        ];

        $comparadorArrays = array_diff($expected, $receita->getFillable());

        $this->assertEquals(0, count($comparadorArrays));
    }


    /** @test*/
     function inserir_nova_receita()
    {
        $rec = new Receita([
            'valor' => 1513,
            'tipo_receita' => 'Salário',
            'users_id' => 1
        ]);
        $rec->save();

        $this->assertEquals(1513, $rec->valor);
        $this->assertEquals('Salário', $rec->tipo_receita);
        $this->assertEquals(1, $rec->users_id);
    }
}
