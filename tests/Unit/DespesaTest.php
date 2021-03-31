<?php

namespace Tests\Unit;

use Tests\TestCase;
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
             'pessoas_id'
         ];
 
         $comparadorArrays = array_diff($expected, $des->getFillable());
 
         $this->assertEquals(0, count($comparadorArrays));
     }

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