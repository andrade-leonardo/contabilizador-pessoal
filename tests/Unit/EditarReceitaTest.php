<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Receita;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EditarReceitaTest extends TestCase
{
    use DatabaseTransactions;

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
}
