<?php

namespace Tests\Unit;

use Tests\TestCase;
use Tests\Feature\OpTest;

class OperacoesTest extends TestCase
{

    /** @test*/
    public function soma_Receita_Test()
    {
        $OpTest = new OpTest();
        $resultado =  $OpTest->rec()->valor +  $OpTest->receita()->valor;
        $this->assertEquals(1885, $resultado);
    }

     /** @test*/
     public function soma_Despesa_Test()
     {
         $OpTest = new OpTest();
         $resultado =  $OpTest->des()->valor +  $OpTest->despesa()->valor;
         $this->assertEquals(815, $resultado);
     }

    /** @test*/
    public function subtracao_Total_Test()
    {
        $OpTest = new OpTest();
        $resultado =  $OpTest->rec()->valor -  $OpTest->des()->valor;
        $this->assertEquals(835, $resultado);
    }

    /** @test*/
    public function subtracao_Test()
    {
        $OpTest = new OpTest();
        $resultado =  $OpTest->receita()->valor -  $OpTest->despesa()->valor;
        $this->assertEquals(235, $resultado);
    }

    /** @test*/
    public function divisao_Despesa_Test()
    {
        $OpTest = new OpTest();
        $resultado =  $OpTest->des()->valor / 3;
        $this->assertEquals(205, $resultado);
    }

    /** @test*/
    public function saldo_Test()
    {
        $OpTest = new OpTest();
        $saldo = $OpTest->user()->saldo = (($OpTest->rec()->valor +  $OpTest->receita()->valor) -
        ($OpTest->des()->valor + $OpTest->despesa()->valor));
        $this->assertEquals(1070, $saldo);
    }
}
