<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /** @test */
    public function checar_colunas_tabela_user()
    {
        $user = new User();

        $expected = [
            'name',
            'email',
            'password'
        ];

        $comparadorArrays = array_diff($expected, $user->getFillable());

        $this->assertEquals(0, count($comparadorArrays));
    }
}
