<?php

namespace Tests\Unit;

use Tests\TestCase;
use Tests\OpTest;
use App\Models\Despesa;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DespesaTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
     public function checar_colunas_tabela_Despesa()
     {
         $des = new Despesa();

         $expected = [
             'valor',
             'tipo_despesa',
             'users_id'
         ];

         $comparadorArrays = array_diff($expected, $des->getFillable());

         $this->assertEquals(0, count($comparadorArrays));
     }

      /** @test*/
    public function inserir_despesa()
    {

        $des = new Despesa([
            'valor' => 615.53,
            'tipo_despesa' => 'Cartão de Crédito',
            'users_id' => 1
        ]);
        $des->save();

        $this->assertEquals(615.53, $des->valor);
        $this->assertEquals('Cartão de Crédito', $des->tipo_despesa);
        $this->assertEquals(1, $des->users_id);
    }
 }
