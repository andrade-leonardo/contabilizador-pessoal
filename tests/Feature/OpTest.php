<?php

namespace Tests\Feature;

use App\Models\Despesa;
use App\Models\Receita;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class OpTest extends TestCase
{

    use DatabaseTransactions;


    public function user()
    {
        $us = new User(['name' => 'Carla Bárbara Liz Lima', 'saldo' => '3405', 'email' => 'carlabarbaralizlima__carlabarbaralizlima@edbrasil.net', 'password' => '561ewqeqwij']);
        return $us;
    }

    public function des()
    {
        $des = new Despesa(['valor' => 615, 'tipo_despesa' => 'Cartão de Crédito', 'users_id' => 1]);
        return $des;
    }

    public function despesa()
    {
        $despesa = new Despesa(['valor' => 200, 'tipo_despesa' => 'Cartão de Crédito', 'users_id' => 1]);
        return $despesa;
    }

    public function receita()
    {
        $receita = new Receita(['valor' => 435, 'tipo_receita' => 'Salário', 'users_id' => 1]);
        return $receita;
    }

    public function rec()
    {
        $rec = new Receita(['valor' => 1450, 'tipo_receita' => 'Salário', 'users_id' => 1]);
        return $rec;
    }

    public function validaUsuario($overrides = [])
    {
        return array_merge([
            'name'          => 'required',
            'saldo'      => 'required|numeric',
            'email'    => 'required',
            'password'    => 'required',
        ], $overrides);
    }

    public function validaDespesa($overrides = [])
    {
        return array_merge([
            'valor'          => 'required|numeric',
            'tipo_despesa'      => 'required',
            'users_id'    => 'required|numeric',
        ], $overrides);
    }

    public function validaReceita($overrides = [])
    {
        return array_merge([
            'valor'          => 'required|numeric',
            'tipo_despesa'      => 'required',
            'users_id'    => 'required|numeric',
        ], $overrides);
    }
}
