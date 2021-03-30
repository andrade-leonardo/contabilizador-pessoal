<?php

namespace Tests\Unit;

use App\Models\Despesa;
use PHPUnit\Framework\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InserirUserTest extends TestCase
{   
    use DatabaseTransactions;
    
    /** @test*/
    public function test_example()
    {
       Despesa::create([
        'valor' => 'Carla Bárbara Liz Lima',
        'tipo_despesa' => 'carlabarbaralizlima__carlabarbaralizlima@edbrasil.net',
        'pessoas_id' => '1'
       ]);
    }
}
