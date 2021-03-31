<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Despesa;

class DespesaTest extends TestCase
{
     
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
 }